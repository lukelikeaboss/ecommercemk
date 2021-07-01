<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CreatePayment;
use App\Models\Customerpayment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $payment = CreatePayment::all();
        return view('payments.payments', compact('payment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('payments.create-payment');
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
//        $rules =[
//            'name'=>'required',
//            'cost'=>'required',
//            'product'=>'required',
//            'business_id'=> 'required',
//        ];
//        if ($request->whenHas())



    Customerpayment::create(['name' => $request->name,
    'amount' => $request->amount->required,
    'location' => $request->location,
    'phone_number' => $request->phone_number,
    'code' => $request->code,
     'timestamp' => $request->timestamp,
]);

return redirect()->route('category'));
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
        $payment = CreatePayment::findOrFail($id);
        return view('payments.payment-details', compact('payment'));
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
    }
}
