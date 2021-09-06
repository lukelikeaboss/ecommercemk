@extends('layouts.frontend-master')
@section('content')

    <div class="container">


        <h2 class="text-center mt-5"><strong>Explore <b>Products</b> </strong></h2>

        <div class="input-group">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                   aria-describedby="search-addon" />
            <button type="button" class="btn btn-outline-primary">search</button>
        </div>

        <div class="row" id="featured">

            @foreach($products as $product)
                <div class="col-lg-3 col-md-6 col-sm-12 h-100 mt-2">

                    @include('layouts.single_product')
                </div>
            @endforeach

        </div>

    </div>


@endsection
