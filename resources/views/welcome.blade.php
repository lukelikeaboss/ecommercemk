@extends('layouts.frontend-master')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><strong>Trending <b>Products</b>{{$value}}  </strong></h2>
                <a href="{{route('load_all_products')}}" class="btn btn-primary">Show All</a>
                /*<!! here starts the carousel -->*/
                <div class="">
                    <h1>Products</h1>

                    <p class="font-weight-bold">This are product samples.</p>

                    <section class="carousel" aria-label="Gallery">
                        <ol class="carousel__viewport">
                            <li id="carousel__slide2"
                                tabindex="0"
                                class="carousel__slide">
                                <div class="carousel__snapper"></div>
                                <a href="#carousel__slide1"
                                   class="carousel__prev">Go to previous slide</a>
                                <a href="#carousel__slide3"
                                   class="carousel__next">Go to next slide</a>
                            </li>
                            <li id="carousel__slide3"
                                tabindex="0"
                                class="carousel__slide">
                                <div class="carousel__snapper"></div>
                                <a href="#carousel__slide2"
                                   class="carousel__prev">Go to previous slide</a>
                                <a href="#carousel__slide4"
                                   class="carousel__next">Go to next slide</a>
                            </li>
                            <li id="carousel__slide4"
                                tabindex="0"
                                class="carousel__slide">
                                <div class="carousel__snapper"></div>
                                <a href="#carousel__slide3"
                                   class="carousel__prev">Go to previous slide</a>
                                <a href="#carousel__slide1"
                                   class="carousel__next">Go to first slide</a>
                            </li>
                        </ol>
                        <aside class="carousel__navigation">
                            <ol class="carousel__navigation-list">
                                <li class="carousel__navigation-item">
                                    <a href="#carousel__slide1"
                                       class="carousel__navigation-button">Go to slide 1</a>
                                </li>
                                <li class="carousel__navigation-item">
                                    <a href="#carousel__slide2"
                                       class="carousel__navigation-button">Go to slide 2</a>
                                </li>
                                <li class="carousel__navigation-item">
                                    <a href="#carousel__slide3"
                                       class="carousel__navigation-button">Go to slide 3</a>
                                </li>
                                <li class="carousel__navigation-item">
                                    <a href="#carousel__slide4"
                                       class="carousel__navigation-button">Go to slide 4</a>
                                </li>
                            </ol>
                        </aside>
                    </section>
                </div>
            </div>

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
