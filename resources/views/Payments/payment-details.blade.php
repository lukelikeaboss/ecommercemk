@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-10 col-sm-8 col-md-8 border ">
            <h2> Payment Details</h2>
            <hr>
            <p>Amount</p>
            <p>Date</p>
            <p>Mode of payment</p>
            <button type="button" class="btn btn-info rounded my-auto">Customer<i class="fa fa-user-circle-o" style="font-size:48px;color:cornflowerblue"></i></button>
            <button type="button" class="btn btn-success rounded mr-0 mb-3 mx-2">Order<i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </button>
        </div>
    </div>

@endsection
