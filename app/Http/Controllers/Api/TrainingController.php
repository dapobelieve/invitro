<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\ApplicationRequest;
use App\Models\Applicant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Training;
use App\Http\Requests\TrainingRequest;
use Cloudder;
use Storage;
use Image;
use App\Events\ApplicationCreatedEvent;

class TrainingController extends Controller
{
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
                'training' => Training::with('materials')->where('id', $training->id)->first(),
            ]
        ]);
    }


    public function save(TrainingRequest $request)
    {
        $trainImage = '';

        // process training image first
        if ($request->hasFile('cimage')) {

            $image = $request->file('cimage');
            $extension  = $image->getClientOriginalExtension();

            $trainImage = uniqid();

            $cropPath = public_path('images/').$trainImage.'.'.$extension ;

            // looks really good
            Image::make($image)->resize(350, null, function ($con) {
                $con->aspectRatio();
            })->save($cropPath);

        }


        //create record
        $training = Training::firstOrCreate([
            'title' => $request->title,
            'price' => 0,
            'image' => $trainImage == '' ? '' : $trainImage.'.'.$extension,
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
            abort(404);
        }


//        sleep(4);
        return response()->json([
            'data' => $training,
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


        /**
         * fire event to send a mail here
         * to applicant with application details
         */
        event(new ApplicationCreatedEvent($applicant->load('training')));


        return response()->json([
            'data' => [
                'application_ref' => $applicant->reference
            ],
            'message' => 'Details of your registration has been sent to your mail'
        ]);
    }

    private function createPaymentDetails(Applicant $applicant, Training $training)
    {
        $applicant->payment()->create([
            'trxn_ref' => $applicant->reference,
            'amount'   => (int) $training->price
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
