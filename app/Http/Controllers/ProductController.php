<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $products = Product::all();
       return  view('product.product', compact('products'));//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('product.create-product', compact('categories') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name'=>'required',
            'cost'=>'required',
            'quantity'=>'required',
            'short_description'=>'required',
//            'image_url'=>'required|mime:jpg,png,svg,jpeg',
            'business_id'=>'required'
        ];
        //
//        $validator = Validator::make($request->all(), $rules);
//        if ($validator->fails()){
//            return redirect()->back()
//                ->withErrors($validator)
//                ->withInput();
//        }
//        else{
//               //storeimagehere
//
//        }

        Product::create([
            'name'=>$request->name,
            'short_description'=>$request->short_description,
            'cost'=>$request->cost,
            'image_url'=>$request->name,
            'business_id'=> 1,
            'category_id' => 1,
            'quantity'=>$request->quantity,
        ]);
        return redirect()->route('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $product = Product::findOrFail($id);
        return view('product.product-details', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $categories = Category::all();
        $product = Product::findOrFail($id);
        return view('product.create-product', compact('categories','product') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $product = Product::findOrFail($id);
        $rules = [
            'name'=>'required',
            'cost'=>'required',
            'quantity'=>'required',
            'short_description'=>'required',
            'image_url'=>'required|mime:jpg,png,svg,jpeg',
            'business_id'=>'required'
        ];
        //
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()){
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        else{
            //storeimagehere

        $product->update([
            'name'=>$request->name,
            'short_description'=>$request->short_description?? "emptiness",
            'long_description'=>$request->long_description?? "emptiness",
            'cost'=>$request->cost,
            'category_id'=>$request->category_id,
            'business_id'=>$request->business_id,
            'quantity'=>$request->quantity,
        ]);
            return redirect()->route('product');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $product = Product::findOrFail($request->id);
        if ($product->image_url!=null){
            Storage::delete('public/images/'.$product->image_url);
        }



        $product->delete();
        return response()->json();
    }
}
