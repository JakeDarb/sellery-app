<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        $products  = \DB::table('products')->get();
        $data['products'] = $products;
        return view('products/index', $data);
    }

    public function show(\App\Models\Product $product){
        $data['product'] = $product;
        return view('products/show', $data);
    }
}
