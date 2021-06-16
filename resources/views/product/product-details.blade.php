@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-lg-8 col-md-6 col-sm-12 my-auto">
            <h4 class="text-left align-content-center">{{$product->name}} details</h4>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 text-right">
            <a href="#"  class="btn  btn-success  mx-2 "><i class="fa fa-edit"> </i>Edit</a>
            <a href="#"  class="btn  btn-success mx-2"><i class="fa fa-trash"></i>Delete</a>
        </div>
    </div>

    <hr>

    <div class="row my-5">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="img-box img-fluid">
                <img src="{{ asset('pics/wallpaperbetter(1).jpg')}}" class="img-fluid" alt="">
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 p-5  rounded shadow">

            <h4>Seller Info</h4>
            <hr>

            <p><strong>Name:</strong> JK Live</p>
            <p><strong>Number:</strong> 071234567</p>

            <div class="row ">
                <a href="#"  class="btn  btn-outline-success  mx-2 "><i class="fa fa-comment mr-2"> </i>Chat</a>
                <a href="#"  class="btn  btn-success mx-2"><i class="fa fa-phone mr-2"></i>Contact</a>
            </div>

        </div>
    </div>
{{--    <div class="row">--}}
{{--        <span class="border border-info">--}}
{{--        <div class="col-md-4 border-primary">--}}
{{--            <div class="img-box img-fluid">--}}
{{--                <img src="{{ asset('pics/wallpaperbetter(1).jpg')}}" class="img-fluid" alt="">--}}
{{--            </div>--}}
{{--            <div class="col-lg-6 col-md-6 col-sm-12 p-5  rounded shadow">--}}
{{--                <div class="table border-primary">--}}
{{--                    <div class="table">--}}
{{--                        <th>seller info</th>--}}

{{--                        <tr>--}}
{{--                            <td>--}}
{{--                                Name:<a href="#">Name</a>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                        <br>--}}
{{--                        <tr>--}}
{{--                            <td>--}}
{{--                                Number:--}}
{{--                                <br>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                        <a href="#"  class="btn-success btn">Chat</a>--}}
{{--                        <a href="#" class="btn-success btn">Contact</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        </span>--}}
{{--    </div>--}}
    <div class="row mb-5">

        <div class="col-lg-6 col-md-6 col-sm-12 p-5  rounded shadow  shadow-success">
            <h4>  Description:</h4>
            <hr>
            <p>{{$product->short_description}}</p>

            <hr>
            <p>Category: {{$product->category_id}}</p>


        </div>
        <hr>
        <div class="col-lg-6 col-md-6 col-sm-12 p-5  rounded shadow">
            <h4>   More details: </h4>
            <hr>
            <p><strong>Cost:</strong> Kshs {{$product->cost}}</p>

            <p><strong>Quantity:</strong> {{$product->quantity}} items</p>

            <p><strong>Rating:</strong> 4 star</p>
        </div>
    </div>


    </div>

</div>



@endsection
