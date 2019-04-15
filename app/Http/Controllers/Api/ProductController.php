<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\{Store, Order};
use App\Http\Requests\StoreRequest;
use Image;
use App\Http\Traits\Upload;


class ProductController extends Controller
{
    use Upload;
    public function index()
    {
        $products = Store::count(); //get their orders or not ??
        $orders   = Order::select('viewed', 'processed_at')->get();

        return response()->json([
            'data' => [
                'products' => $products,
                'orders'   => $orders,
            ]
        ]);
    }

    public function list()
    {
        $products = Store::latest()->get(); //get their orders or not ??

        return response()->json([
            'data' => [
                'products' => $products,
            ]
        ]);
    }

    public function create(StoreRequest $request)
    {
        $storeImage = null;
        //if hasImage process it
        if ($request->hasFile('image')) {
            try {
                    $material = Cloudder::upload($file->path(), $file->getClientOriginalName(), [
                        'folder' => 'ivf-store-images',
                        'quality' => 50,
                        'height' => 280,
                        'width' => 360,
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
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $storeImage = uniqid();
            $originalPath = public_path('store/original/').$storeImage.'.'.$extension ;
            $cropPath     = public_path('store/crop/').$storeImage.'.'.$extension ;


            //store original
            Image::make($image)->save($originalPath);


            //store crop
            Image::make($image)->resize(360, 280, function ($con) {
                $con->aspectRatio();
            })->save($cropPath);
        }

        //process other body parts
        $product = Store::firstOrCreate([
            'name' => $request->name,
            'price' => (float)$request->price,
            'details' => $request->details,
            'image'   => $storeImage == '' ? null : $storeImage.".".$extension,
            'slug' => str_slug($request->name).'-'.str_random(5)
        ]);

        return response()->json([
            'data' => [
                'product' => $product
            ],
            'message' => 'Added Successfully'
        ]);
    }

    public function delete($id)
    {
        $product = Store::findOrFail($id);
        $product->delete();

        return response()->json([
            'message' => 'Item Deleted'
        ]);
    }

    public function edit($id)
    {
        $product = Store::findOrFail($id);

        return response()->json([
            'data' => [
                'product' => [
                    'id'  => $product->id,
                    'name' => $product->name,
                    'price' => $product->price,
                    'details' => $product->details,
                    'image' => $product->image
                ]
            ]
        ]);
    }

    public function update(Request $request, $id)
    {
        $product = Store::findOrFail($request->id);

        $storeImage = null;
        //if hasImage process it
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $storeImage = uniqid();
            $originalPath = public_path('store/original/').$storeImage.'.'.$extension ;
            $cropPath     = public_path('store/crop/').$storeImage.'.'.$extension ;

            //store original
            Image::make($image)->save($originalPath);

            //store crop
            Image::make($image)->resize(360, 280, function ($con) {
                $con->aspectRatio();
            })->save($cropPath);

            $product->image = $storeImage.".".$extension;
            $product->save();
        }

        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'details' => $request->details
        ]);


        return response()->json([
            'data' => [
                'product' => $product,
            ],
            'message' => 'Update successful'
        ]);
    }
}
