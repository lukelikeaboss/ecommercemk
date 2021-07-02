<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $customer = Customer::all();

        return view('customer.customer', compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('customer.create-customer');
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
            'phone_number'=>'required',
            'location'=>'required',
            'avatar_url'=>'required|mime:jpg,png,svg,jpeg',
            'customer_id'=>'required'
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
        Customer::create([
            'name'=>$request->name.$request->surname,
            'email'=>$request->email,
            'password'=>$request->password,
            'phone_number'=>$request->number,
            'location'=>$request->location,
            'avatar_url' => $filename,
            'status' => 'Active',
            'customer_id'=> 2,
            'payment_method'=>$request->payment_method,
        ]);

        return redirect()->route('customer');
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
        $customer = Customer::findOrFail($id);
        return view('customer.customer_details', compact('customer'));
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
        $customer = Customer::all();
        $customer = Customer::findOrFail($id);
        return view('customer.create-customer', compact('customer') );
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
        $customer = Customer::findOrFail($id);
        $rules = [
            'name'=>'required',
            'phone_number'=>'required',
            'location'=>'required',
            'image_url'=>'required|mime:jpg,png,svg,jpeg',
            'customer_id'=>'required'
        ];
        //
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()){
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        else {
            //storeimagehere

            $customer->update([
                'name' => $request->name,
                'long_description' => $request->long_description ?? "emptiness",
                'payment_method' => $request->cost,
                'phone_number' => $request->phone_number,
                'customer_id' => $request->category_id,

            ]);
            return redirect()->route('customer');
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
        $customer = Customer::findOrFail($request->id);
        if ($customer->image_url!=null){
            Storage::delete('public/images/'.$business->image_url);
        }



        $customer->delete();
        return response()->json();
    }

}
