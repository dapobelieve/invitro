<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Training;
use App\Http\Requests\TrainingRequest;
use Cloudder;
use Storage;
use Image;

class TrainingController extends Controller
{
    public function index(Request $request)
    {
        $tr = Training::with('materials')->latest()->get();

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
        if ($request->hasFile('image')) {

            $image = $request->file('image');
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
            'price' => $request->cost,
            'image' => is_null($trainImage) ? '' : $trainImage.'.'.$extension,
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

}
