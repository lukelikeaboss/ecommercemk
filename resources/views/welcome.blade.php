@extends('layouts.frontend-master')
@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center mt-3">

            <div class="col-lg-6 my-auto">

                <small class="text-teal font-weight-bold">One stop shop, for all your shopping needs!</small>
                <h1 class="font-weight-bold">
                        We have the best quality products on the market at the best prices!
                    </h1>

                <a href="#featured" class="btn btn-warning btn-lg mt-3">Featured Products</a>
            </div>
            <div class="col-lg-5">


                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">

                        @foreach($products as $product)
                            <div class="carousel-item @if($loop->first) active @endif">
                                <img class="d-block w-100 rounded carousel-image" src="{{ asset('storage/images/'.$product->image_url)}}" alt="First slide">
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>



            </div>

        </div>

    </div>

    <div class="container">

        <h2 class="text-center"><strong>Our <b>Categories</b> </strong></h2>
        <div class="row mb-5 pb-5">
            @foreach($categories as $category)
                @include('layouts.category-template')

            @endforeach
        </div>

        <h2 class="text-center mt-5"><strong>Trending <b>Products</b> </strong></h2>

        <div class="row" id="featured">

            @foreach($products as $product)
                <div class="col-lg-3 col-md-6 col-sm-12 h-100 mt-2">

                    @include('layouts.single_product')
                </div>
            @endforeach

        </div>

    </div>


@endsection
