@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-10 col-sm-8 col-md-8 border ">
            <h2> Payment Details</h2>
            <hr>
            <p>Amount: {{$payment->amount}}</p>
            <p>Date: {{$payment->created_at}}</p>
            <p>Invoice Number: {{$payment->invoice_number}}</p>
            <button type="button" class="btn btn-info rounded my-auto">Customer<i class="fa fa-user" style="color:cornflowerblue"></i></button>
            <button type="button" class="btn btn-success rounded my-auto">Order<i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </button>
        </div>
    </div>

@endsection
