<?php

namespace App\Http\Controllers;

use App\Models\OrderProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    //

    public function index(Request $request){

        $user_temporary_id = $request->cookie("user_cookie_id");

        $cart_products= OrderProduct::where('order_id', null)
            ->where('user_cookie_id', $user_temporary_id)->get();

        return view('FrontEnd.checkout', compact('cart_products'));
    }

    public function addToCart(Request $request){

        /**
         * TODO:Test Ajax on frontend product details page to addToCart
         * I added a script tag from stack overflow that asynchronously adds products to a cart after being clicked!?
         * TODO: Add route to this function on web.php
         */

        $user_temporary_id = $request->cookie("user_cookie_id");
        $rules = [
            'quantity'=>'required',
            'product_id'=>'required',
            ];

        $request->validate($rules);


        OrderProduct::create([
            'products_id' => $request->product_id,
            'quantity' => $request->quantity,
            'user_cookie_id' => $user_temporary_id,
        ]);
        /**
         * TODO: ADD SWEET ALERT
         * can you add a sweet alert on the the controller? or does it have to be in a blade file
         */
        return response()->json();
    }
}
