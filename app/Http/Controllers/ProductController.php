<?php

namespace App\Http\Controllers;

use App\Models\Favourite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    //
    public function index(){
        $products  = \DB::table('products')->get();
        $productCategories  = \DB::table('product_categories')->get();
        $data['products'] = $products;
        $data['categories'] = $productCategories;
        return view('products/index', $data);
    }

    public function show(\App\Models\Product $product){  
        $data['product'] = $product;
        return view('products/show', $data);
    }

    public function favourites(){
        $favourites = Favourite::where('user_id', Auth::id())->get();
        $data['favourites'] = $favourites;
        return view('products/favourites', $data);
    }

    public function byCategory(\App\Models\ProductCategory $category){
        $products = \DB::table('products')->where('product_categories_id', $category->id)->get();
        $data['products'] = $products;
        $data['category'] = $category;
        return view('products/category', $data);
    }

    public function create(){
        // GET CATEGORY INFO
        $productCategories = \DB::table('product_categories')->get();
        $data['productCategories'] = $productCategories;
        // SHOW FORM
        return view('products/create', $data);
    }

    public function store(Request $request){
        $userId = Auth::id(); 

        // VALIDATE INFO
        $validated = $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'price' => 'required',
            'category' => 'required'
        ]);

        // INSERT IN DB
        $product = new \App\Models\Product();
        $product->name = $request->input('name');
        $product->description = $request->input('desc');
        $product->price = $request->input('price');
        $product->product_categories_id = $request->input('category');
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
