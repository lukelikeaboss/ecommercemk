@extends('layouts.frontend-master')
@section('content')

    <div class="container">


        <h2 class="text-center mt-5"><strong>Explore <b>Products</b> </strong></h2>

<div class="col-lg-6 col-md-6 col-sm-12" id="searchBar">

    <div id="products"></div>
        <form action="/search" method="POST" role="search">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="text" class="form-control" name="q"
                       placeholder="Search PRODUCTS or SERVICES"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default fa fa-search">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
            </div>
        </form>


</div>

        <div class="row" id="featured">

            @foreach($products as $product)
                <div class="col-lg-3 col-md-6 col-sm-12 h-100 mt-2">

                    @include('layouts.single_product')
                </div>
            @endforeach

        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {

            $('#country').on('keyup',function() {
                var query = $(this).val();
                $.ajax({

                    url:"{{ route('any') }}",

                    type:"GET",

                    data:{'products':query},

                    success:function (data) {

                        $('#products').html(data);
                    }
                })</script>
        // end of ajax call
@endsection
