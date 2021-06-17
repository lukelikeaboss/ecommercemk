<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $business = Business::all();

        return view('business.business', compact('business'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('business.create-business');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $rules = [
            'name'=>'required',
            'product'=>'required',
            'quantity'=>'required',
            'image_url'=>'required|mime:jpg,png,svg,jpeg',
            'business_id'=>'required'
        ];
        if ($request->hasFile('image_url')){
            $filename = ImageController::addFile($request->file('image_url'));

            if ($filename == "Failed"){
                return redirect()->back()->withInput();
            }

        }
        else{
            $filename = null;
        }
        Business::create([
            'name'=>$request->name,
            'product'=>$request->product,
            'image_url'=>$request->name,
            'business_id'=> 1,
            'category_id' => 1,
            'image_url' => $filename,
            'quantity'=>$request->quantity,
        ]);
        return redirect()->route('business');
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
        $business = Business::findOrFail($id);
        return view('business.business-details', compact('business'));
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
        $business = Business::all();
        $business = Business::findOrFail($id);
        return view('business.create-business', compact('business') );
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

        $business = Business::findOrFail($id);
        $rules = [
            'name'=>'required',
            'product'=>'required',
            'quantity'=>'required',
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

            $business->update([
                'name'=>$request->name,
                'long_description'=>$request->long_description?? "emptiness",
                'cost'=>$request->cost,
                'product'=>$request->product,
                'category_id'=>$request->category_id,
                'business_id'=>$request->business_id,
                'quantity'=>$request->quantity,
            ]);
            return redirect()->route('business');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $business = Business::findOrFail($request->id);
        if ($business->image_url!=null){
            Storage::delete('public/images/'.$business->image_url);
        }



        $business->delete();
        return response()->json();
    }
}
