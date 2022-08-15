<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function create(){
        // SHOW FORM
        return view('products/create');
    }

    public function store(Request $request){
        $userId = Auth::id(); 

        // VALIDATE INFO
        $validated = $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'price' => 'required'
        ]);

        // INSERT IN DB
        $product = new \App\Models\Product();
        $product->name = $request->input('name');
        $product->description = $request->input('desc');
        $product->price = $request->input('price');
        $product->user_id = $userId;
        $product->save();

        $request->session()->flash('message', 'Your product is now for sale');
        $id = $product->id;

        return redirect("/products/$id");
    }

    public function destroy($id){
        $product = \App\Models\Product::where('id', $id)->first();
        if(\Auth::user()->cannot('delete', $product)){
            abort(403);
        }

        $product->delete();
        return redirect('/products');
    }
}
