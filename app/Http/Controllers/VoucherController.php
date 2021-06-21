<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Category;
use App\Models\Product;
use App\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class VoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $voucher = Voucher::all();

        return view('Voucher.Voucher', compact('voucher'));
    }

    /**
     * Sho w the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Voucher.create-Voucher');
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
        Voucher::create([
            'name'=>$request->name,
            'product'=>$request->product,
            'image_url'=>$request->name,
            'business_id'=> 1,
            'category_id' => 1,
            'image_url' => $filename,
            'quantity'=>$request->quantity,
        ]);
        return redirect()->route('voucher');
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
        $voucher = Voucher::findOrFail($id);
        return view('voucher.voucher-details', compact('voucher'));
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
        $voucher = Voucher::all();
        $voucher = Voucher::findOrFail($id);
        return view('voucher.create-voucher', compact('voucher') );
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

        $voucher = Voucher::findOrFail($id);
        $rules = [
            'name'=>'required',
            'product'=>'required',
            'quantity'=>'required',
            'image_url'=>'required|mime:jpg,png,svg,jpeg',
            'Voucher_id'=>'required'
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

            $voucher->update([
                'name'=>$request->name,
                'long_description'=>$request->long_description?? "emptiness",
                'cost'=>$request->cost,
                'product'=>$request->product,
                'category_id'=>$request->category_id,
                'business_id'=>$request->business_id,
                'quantity'=>$request->quantity,
            ]);
            return redirect()->route('voucher');
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
        $voucher = Voucher::findOrFail($request->id);
//        if ($voucher->image_url!=null){
//            Storage::delete('public/images/'.$voucher->image_url);
//        }



        $voucher->delete();
        return response()->json();
    }
}
