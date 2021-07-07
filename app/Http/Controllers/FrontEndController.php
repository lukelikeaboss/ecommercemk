<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    //
public function home(){
    $category = Category::all();
    $products = Product::all();
    return view('welcome', compact('category', 'products'));

}
public function checkout(Request $request){

}

public function productDetails($id){

    $product = Product::findOrFail($id);

    return view('FrontEnd/product_list', compact('product'));
}

}
