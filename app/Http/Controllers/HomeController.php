<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\Training;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Store::latest()->limit(5)->get();
        $train    = Training::latest()->limit(4)->get();

//        dd($products);

        return view('pages.home')->with([
            'products' => $products,
            'courses' => $train
        ]);
    }
}
