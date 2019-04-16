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
        //process other body parts
        $product = Store::firstOrCreate([
            'name' => $request->name,
            'price' => (float)$request->price,
            'details' => $request->details,
            'slug' => str_slug($request->name).'-'.str_random(5)
        ]);

        //if hasImage process it
        if ($request->hasFile('image')) {
            $file = $request->image;
            $imageData = $this->upload($file,'ivf-images', 360,null);
            $data = [
                'public_id' => $imageData['public_id'],
                'secure_url' => $imageData['secure_url']
            ];

            $product->image = json_encode($data);
            $product->save();

        }

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

        //get cloudinary pubic_id
//        $img = json_decode($product->image, true);
//
//        $this->deletePicture($img['public_id']);
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

//            if($product->imgae !== null || $product->image != '') {
//                $img = json_decode($product->image, true);
//                $this->deletePicture($img['public_id']);
//            }

            $file = $request->image;
            $imageData = $this->upload($file,'ivf-images', 360,null);
            $data = [
                'public_id' => $imageData['public_id'],
                'secure_url' => $imageData['secure_url']
            ];
            $product->image = json_encode($data);
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
