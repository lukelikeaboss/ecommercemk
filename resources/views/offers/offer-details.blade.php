@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row-cols-2">
            <div class="col col-lg-6 col-md-4 col-sm-12">
                <strong>Orders</strong>
                <hr>
                <p>Number:{{$offers->offers_id}}</p>
                <p>Amount:{{$offers->offer_amount}}</p>
                <p>Date:{{$offers->created_at}}</p>
            </div>
            <div class="col col-lg-6 col-sm-6 col-sm-12">
                <h4>Customer{{$offers->customer->name}}</h4>
                <hr>
                <p>Name:{{$offers->customer->name}}</p>
                <p>Email: {{$offers->customer->email}}</p>
            </div>
        </div>
        <div class="row">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Products on offer</th>
                </tr>
                <tr>
                    <th>{{$offers->offers_id}}</th>
                    <th>{{$offers->name}}</th>
                    <th>{{$offers->}}</th>
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
