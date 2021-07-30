<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    //
public function home(Request $request){
    $value = $request ->cookie("category");
    if ($value){
        $category = Category::where('name',$value)->first();
        $products = Product::where("category_id",$category->id)->get();
    }
    else{
        $products = Product::all();
        $value = "no cookie";
    }
    $category = Category::all();
   $products = Product::all();
    return view('welcome', compact('category', 'products', 'value'));

}
    public function show(Request $request){
        $product = Product::findOrFail($product->id);
        return view('frontend.product_details', compact('product'));

    }
    public function home2(Request $request){

        $category = Category::all();
        $products = Product::all();
        $value = "Loading All";
        return view('welcome', compact('category', 'products', 'value'));

    }
public function checkout(Request $request){

}

public function productDetails($id){

    $product = Product::findOrFail($id);

    return response(view('FrontEnd/product_list', compact('product')))
        ->withCookie(cookie('category', $product->category->name, 10));
}

}
