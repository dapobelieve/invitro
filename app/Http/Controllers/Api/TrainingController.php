<?php

namespace App\Http\Controllers\Api;

use App\Http\Traits\Upload;
use App\Mail\NotifyAdmin;
use Mail;
use App\Http\Requests\ApplicationRequest;
use App\Mail\TrainingReg;
use App\Models\Applicant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Training;
use App\Http\Requests\TrainingRequest;
use Cloudder;
use Image;


class TrainingController extends Controller
{
    // for uploading to cloudinary
    use Upload;

    public function index(Request $request)
    {
        $tr = Training::with('getApplicationsCount')->latest()->get();

        return response()->json([
            'data' => [
                'trainings' => $tr
            ]
        ]);
    }

    public function getTraining(Training $training)
    {
        return response()->json([
            'data' => [
                'training' => Training::with('materials', 'getApplicationsCount')->where('id', $training->id)->first(),
            ]
        ]);
    }

    public function save(TrainingRequest $request)
    {
        $trainImage = '';

        // process training image first
        if ($request->hasFile('cimage')) {

            $image = $request->file('cimage');
            
            Cloudder::upload($image, null, [
                'folder' => 'ivf-images',
                'quality' => 'auto',
                'timeout' => 3600
            ]);
            
            $imageData = Cloudder::getResult();
            
            
            $data = [
                'public_id' => $imageData['public_id'],
                'secure_url' => $imageData['secure_url']
            ];

            $trainImage = json_encode($data);

        }


        //create record
        $training = Training::firstOrCreate([
            'title' => $request->title,
            'price' => (int)$request->cost,
            'slots' => (int)$request->slots,
            'image' => $trainImage == '' ? '' : $trainImage,
            'content' => $request->details,
            'slug'    => str_slug($request->title).'-'.str_random(5)
        ]);

        if($request->hasFile('materials')) {

            $materials = $request->file('materials');

            //move materials to a temp location ie storage/uploads
            foreach ($materials as $file){

                try {
                    $material = Cloudder::upload($file->path(), $file->getClientOriginalName(), [
                        'folder' => 'ivf-materials',
                        'resource_type' => 'auto',
                        'quality' => 50,
                        'timeout' => 3600
                    ]);

                    if ($material){
                        $training->materials()->create([
                            'material' => json_encode(Cloudder::getResult()),
                        ]);
                    }

                }catch (\Exception $e) {
                    return response()->json([
                        'data' => [],
                        'message' => $e->getMessage()
                    ], 500);
                }
            }

        }


        return response()->json([
            'data' => [
                'training' => $training
            ],
            'message' => 'Training Created!'
        ]);

    }

    public function show($id)
    {
        $training = Training::with('materials')->findOrFail($id);

        if(!$training) {
            return response()->json([
                'status' => 'False',
                'message' => 'Training not found'
            ], 404);
        }


//        sleep(4);
        return response()->json([
            'data' => $training,
        ]);
    }

    public function edit($id)
    {
        $training = Training::find($id);

        if(!$training) {
            return response()->json([
                'status' => 'False',
                'message' => 'Training not found'
            ], 404);
        }

        return response()->json([
            'data' => $training,
        ]);
    }

    public function update(TrainingRequest $request, $id)
    {
        $train = Training::find($id);
        if(!$train) {
            return response()->json([
                'status' => 'False',
                'message' => 'Training not found'
            ], 404);
        }

        if ($request->hasFile('cimage')) {

            if($train->imgae !== null || $train->image != '') {
                $img = json_decode($train->image, true);
                $this->deletePicture($img['public_id']);
            }

            $file = $request->cimage;
            $imageData = $this->upload($file,'ivf-images', 350,null);
            $data = [
                'public_id' => $imageData['public_id'],
                'secure_url' => $imageData['secure_url']
            ];
            $train->image = json_encode($data);
            $train->save();
        }

        $train->update([
            'title' => $request->title,
            'price' => (int)$request->price,
            'slots' => (int)$request->slots,
            'content' => $request->details,
            'slug'    => str_slug($request->title).'-'.str_random(5)
        ]);

        return response()->json([
            'data' => [
                'message' => 'Update Successful'
            ]
        ]);

    }

    public function register(ApplicationRequest $request)
    {
        $training = Training::find($request->training);

        if(!$training) {
            return response()->json([
                'status' => 'False',
                'message' => 'Training not found'
            ], 404);
        }

        //check if user has registered before

        //register user
        $applicant = $training->applications()->firstOrCreate([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'occupation' => $request->occupation,
            'ip' => $request->ip(),
            'address' => $request->address,
            'reference' => 'IVFA-'.str_random(7)
        ]);

        //create payment record
        $this->createPaymentDetails($applicant, $training);

        //notify ivf mail
        Mail::to(config('site.site.email'))->send(new NotifyAdmin($applicant->load('training')));
        /**
         * fire event to send a mail here
         * to applicant with application details
         */
        Mail::to($applicant->email)->send(new TrainingReg($applicant->load('training')));

        return response()->json([
            'data' => [
                'application_ref' => $applicant->reference
            ],
            'message' => 'Details of your registration has been sent to your mail'
        ]);
    }

    public function registerManual(Request $request)
    {
        $training = Training::find($request->id);

        //register user
        $applicant = $training->applications()->firstOrCreate([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'occupation' => $request->occupation,
            'ip' => $request->ip(),
            'reference' => 'IVFA-'.str_random(7)
        ]);

        $this->createPaymentDetails($applicant, $training, 'PAID');

        return response()->json([
            'message' => 'Applicant created successfully'
        ]);
    }

    private function createPaymentDetails(Applicant $applicant, Training $training, $status= "NOT PAID")
    {
        $applicant->payment()->create([
            'trxn_ref' => $applicant->reference,
            'amount'   => (int) $training->price,
            'status' => $status
        ]);
    }

    public function delete($id)
    {
        $training = Training::find($id);

        if(!$training) {
            return response()->json([
                'status' => 'False',
                'message' => 'Training not found'
            ], 404);
        }

        $training->delete();
        return response()->json([
            'message' => 'Item Deleted'
        ]);
    }

}
