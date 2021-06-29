@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row align-self-center">
            <h4>List of Offers</h4>
        </div>
        <div class="col col-lg-6 col-md-4 col-sm-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">OfferName</th>
                    <th scope="col">Product.</th>
                    <th scope="col">Offer amount</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Ends at</th>
                    <th scope="col">Offer amount</th>
                </tr>
                </thead>
                <tbody>
                <tr scope="row">
                    @foreach($offers as $offer)
                        <td>{{$offer->id}}</td>
                        <td>{{$offer->name}}</td>
                        <td>{{$offer->product_id}}</td>
                        <td>{{$offer->start_date}}</td>
                        <td>{{$offer->offer_amount}}</td>
                        <td>25Minutes ETA</td>
                    @endforeach
                </tr>

                </tbody>
            </table>
        </div>
    </div>

@endsection
