<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Category;
use App\Models\location;
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
     * Sho w the form for creating a new resource.
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
            'avatar_url'=>'required|mime:jpg,png,svg,jpeg',
            'business_id'=>'required'
        ];
        if ($request->hasFile('avatar_url')){
            $filename = ImageController::addFile($request->file('avatar_url'));

            if ($filename == "Failed"){
                return redirect()->back()->withInput();
            }

        }
        else{
            $filename = null;
        }
        $business = Business::create([
            'name'=>$request->name,
            'product'=>$request->product,
            'email' => $request->email,
            'password' => $request->password,
            'phone_number' => $request->phone_number,
            'business_id'=> 1,
            'business_number'=> $request->business_number,
            'category_id' => 1,
            'status' => 'verified',
            'avatar_url' => $filename,
            'external_url' => $request->external_url,
            'quantity'=>$request->quantity,
        ]);
        Location::create([
            'pin'=> $request->pin,
            'business_id'=>$business->id,
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
        $business = Business:: findOrFail();
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
