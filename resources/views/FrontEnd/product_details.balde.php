@extends('layouts.frontend-master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="col-lg-6 col-md-4 col-sm-12">
                <a href="#" ><img src="{{}"></img></a>

            </div>
            <div class="col">
                <p>{{$product->name}}</p>
                <hr>
                <p>{{$product->description}}</p>
                <p>{{product->amount}}</p>
                <hr>
                <button class="btn-success">buy now</button>
                <button class="btn-info">Add to cart</button>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header"><strong>seller info</strong></div>
                    <hr>
                    <p>{{$business->phone_number}}</p>
                    <p>{{business->locations()->first()->pin}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col"> <strong>Description</strong>
    <hr>
    <p>{{$product->description}}</p>
    <button class="btn-success">Add to wish list</button>
    </div>
    </div>
    <div class="col">
        <strong>Reviews</strong>
        <hr>
        <button class="btn-outline-info rounded">Add Review</button>
    </div>
    <hr>
    <div class="row">

        <h5>Related Products</h5>
        <div class="col col-md-6">
            <div class="card">
                <img href="#"><img src="#" alt="product pic"></img> </a>
                <p>product name</p>
                <p>product description</p>
            </div>
        </div>
        <div class="col col-md-6">
            <div class="card">
                <img href="#"><img src="#" alt="product pic"></img> </a>
                <p>product name</p>
                <p>product description</p>
            </div>
        </div>
        <div class="col col-md-6">
            <div class="card">
                <img href="#"><img src="#" alt="product pic"></img> </a>
                <p>product name</p>
                <p>product description</p>
            </div>
        </div>
    </div>
</div>
@endsection
