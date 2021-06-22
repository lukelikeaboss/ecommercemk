@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row-cols-2">
            <div class="col col-lg-6 col-md-4 col-sm-12">
                <strong>Orders</strong>
                <hr>
                <p>Number:{{$orders->customer_id}}</p>
                <p>Amount:{{$orders->shipping_cost}}</p>
                <p>Date:{{$orders->created_at}}</p>
            </div>
            <div class="col col-lg-6 col-sm-6 col-sm-12">
                <h4>Customer{{$orders->customer->name}}</h4>
                <hr>
                <p>Name:{{$orders->customer->name}}</p>
                <p>Email: {{$orders->customer->email}}</p>
            </div>
        </div>
        <div class="row">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Order products</th>
                </tr>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Amount</th>
                    <th>Quantity</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>12343</td>
                    <td>Luke Skywalker</td>
                    <td>1000</td>
                    <td>43</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection
