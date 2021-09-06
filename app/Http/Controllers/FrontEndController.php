<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class FrontEndController extends Controller
{
    //
public function home(Request $request){
    $value = $request ->cookie("category");
    $user_temporary_id = $request->cookie("user_cookie_id");
    if ($user_temporary_id == null){

        $random_id = $this->generateRandomString();
        Cookie::queue('user_cookie_id', $random_id );
    }

    if ($value){
        $category = Category::where('name',$value)->first();
        $products = Product::where("category_id",$category->id)->get();
    }
    else{
        $products = Product::all();
        $value = "no cookie";
    }
    $categories = Category::all()->take(4);
   $products = Product::all();
    return view('welcome', compact('categories', 'products', 'value'));

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

    return response(view('FrontEnd.product_details', compact('product')))
        ->withCookie(cookie('category', $product->category->name, 10));
}

public function explore(){
    $products = Product::all();

    return view('frontend.explore', compact('products'));
}

public function generateRandomString($length = 10)
{
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

}
