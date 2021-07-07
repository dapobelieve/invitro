<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = Order::with('payment', 'items')->latest()->get();

        return response()->json([
            'data' => [
                'orders' => $orders
            ]
        ]);
    }

    public function getOrder($ref)
    {
        //return order
        $order = Order::with('items.product', 'payment')->where('ref', $ref)->first();

        //update order
        $order->update([
            'viewed' => 1
        ]);

        return response()->json([
            'data' => [
                'order' => $order
            ]
        ]);
    }
}
