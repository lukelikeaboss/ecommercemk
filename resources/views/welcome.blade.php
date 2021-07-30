@extends('layouts.frontend-master')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><strong>Trending <b>Products</b>{{$value}}  </strong></h2>
                <a href="{{route('load_all_products')}}" class="btn btn-primary">Show All</a>
                /*<!! here starts the carousel -->*/
{{--                <div class="carousel-inner " role="listbox">--}}
{{--                    <div class="item active">--}}
{{--                        <img class="small" src="{{asset('pics/picha.svg')}}" alt="item 1" >--}}
{{--                    </div>--}}

{{--                    <div class="item">--}}
{{--                        <img src="{{asset('pics/picha.svg')}}" alt="items 2" >--}}
{{--                    </div>--}}

{{--                    <div class="item">--}}
{{--                        <img src="{{asset('pics/picha.svg')}}" alt="items 3" >--}}
{{--                    </div>--}}
{{--                    <a class="left carousel-control" href="Carousel" role="button" data-slide="prev">--}}
{{--                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>--}}
{{--                        <span class="sr-only">Previous</span>--}}
{{--                    </a>--}}
{{--                    <a class="right carousel-control" href="Carousel" role="button" data-slide="next">--}}
{{--                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>--}}
{{--                        <span class="sr-only">Next</span>--}}
{{--                    </a>--}}
{{--                <style>--}}
{{--                    .carousel-item{--}}
{{--                        height: 32rem;--}}
{{--                        bacground-color: #9e6363;--}}
{{--                        position: absolute;     }--}}
{{--                </style>--}}
{{--               <div  class="carousel-item active">--}}
{{--                   <div class="container">--}}
{{--                        </div>--}}
{{--               </div>--}}

{{--                                    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">--}}
{{--                    <!-- Carousel indicators -->--}}
{{--                    <ol class="carousel-indicators">--}}
{{--                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>--}}
{{--                        <li data-target="#myCarousel" data-slide-to="1">dfvdv--}}
{{--                        <br>--}}
{{--                        <li data-target="#myCarousel" data-slide-to="2">fda</li>--}}
{{--                    </ol>--}}
{{--                    <!-- Wrapper for carousel items -->--}}
{{--                    <div class="carousel-inner">--}}

{{--                        @foreach($products as $product)--}}
{{--                            <div class="carousel-item">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-sm-3">--}}
{{--                                    <div class="thumb-wrapper">--}}
{{--                                        <div class="img-box">--}}
{{--                                            <img src="{{ asset('storage/images/'.$product->image_url)}}" class="img-fluid" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="thumb-content">--}}
{{--                                            <h4>{{$product->name}}</h4>--}}
{{--                                            <p class="item-price"><strike>$400.00</strike> <span>{{$product->amount}}</span></p>--}}
{{--                                            <div class="star-rating">--}}
{{--                                                <ul class="list-inline">--}}
{{--                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>--}}
{{--                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>--}}
{{--                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>--}}
{{--                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>--}}
{{--                  d                                  <li class="list-inline-item"><i class="fa fa-star-o"></i></li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                            <a href="#" class="btn btn-primary">Add to Cart</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                    <!-- Carousel controls -->--}}
{{--                    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">--}}
{{--                        <i class="fa fa-angle-left"></i>--}}
{{--                    </a>--}}
{{--                    <a class="carousel-control-next" href="#myCarousel" data-slide="next">--}}
{{--                        <i class="fa fa-angle-right"></i>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        <div class="row">

            @include('layouts.category-template')
        </div>
    </div>

    <div class="container">

        <div class="row justify-content-center">

                @foreach($products as $product)
                <div class="col-3 h-100">

                @include('layouts.single_product')
                </div>
                @endforeach

        </div>
    </div>
    </div>
@endsection
