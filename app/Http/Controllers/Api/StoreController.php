<?php

namespace App\Http\Controllers\Api;

use App\Models\Order;
use App\Models\Payment;
use App\Models\Store;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    private $orderTotal = 0;

    private function  getOrderTotal()
    {
        return $this->orderTotal;
    }

    public function index()
    {
        $products = Store::all();
        return response()->json([
            'data' => [
                'products' => $products
            ]
        ]);
    }

    public function getProduct(Store $store)
    {
        return response()->json([
            'data' => [
                'product' => $store
            ]
        ]);
    }


    public function placeOrder(Request $request)
    {
        //validate user data
        $this->validate($request, [
            'data.phone' => 'required|digits:11',
            'data.email' => 'required|email',
            'cart'  => 'required|array'
        ]);

        //create order record and reference
        $order = Order::firstOrCreate([
            'name' => $request->data['name'],
            'phone' => $request->data['phone'],
            'email' => $request->data['email'],
            'address' => $request->data['address'],
            'ipaddress' => $request->ip(),
            'ref'     => str_random(10),
        ]);

        //create order details
        foreach ($request->cart as $cart) {
            // grab product ids and sum their prices, never trust the front end ;)
            $productId = $cart['product']['id'];
            $this->orderTotal += (Store::where('id', $productId)->value('price') * $cart['quantity']);

            $order->items()->firstOrCreate([
                'store_id' => $cart['product']['id'],
                'quantity'   => $cart['quantity']
            ]);
        }


        //create payment record
        $order->payment()->create([
            'trxn_ref' => $order->ref,
            'amount'   => $this->orderTotal
        ]);


        //return [order ref, order total]
        return response()->json([
            'data' => [
                'ref'  => $order->ref
            ],
            'message' => ''
        ], 200);
    }
}
