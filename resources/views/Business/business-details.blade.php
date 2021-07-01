@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-6 col-md-6 col-sm-12 my-auto">
               <img src="{{ asset('storage/images/'.$business->avatar_url)}}" class="img-thumbnail card-img rounded mb-3 img-box rounded-circle"  alt="avatar">
                <h3><strong>Seller:{{$business->name}}</strong></h3>
                <a href="#" class="btn btn-success rounded"><i class="fa fa-phone"></i> Call</a>
                <a href="#"  class="btn  btn-success  mx-2 "><i class="fa fa-edit"> </i>Edit</a>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 p-5  rounded shadow">

                <h4>Business Info</h4>
                <hr>

                <p><strong>Name:</strong> {{$business->name}}</p>
                <p><strong>Location:</strong> </i> </p>

                <div class="row ">
                    <a href="#"  class="btn  btn-outline-success  mx-2 "><i class="fa fa-comment mr-2"> </i>Chat</a>
                    <a href="#"  class="btn  btn-success mx-2"><i class="fa fa-phone mr-2"></i>Contact</a>
                </div>

            </div>
        </div>

        <hr>

{{--        <div class="row my-5">--}}
{{--            <div class="col-lg-6 col-md-6 col-sm-12">--}}
{{--                <div class="img-box img-fluid">--}}
{{--                    <img src="{{ asset('pics/wallpaperbetter(1).jpg')}}" class="img-fluid" alt="">--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-lg-6 col-md-6 col-sm-12 p-5  rounded shadow">--}}

{{--                <h4>Seller Info</h4>--}}
{{--                <hr>--}}

{{--                <p><strong>Name:</strong> JK Live</p>--}}
{{--                <p><strong>Number:</strong> 071234567</p>--}}

{{--                <div class="row ">--}}
{{--                    <a href="#"  class="btn  btn-outline-success  mx-2 "><i class="fa fa-comment mr-2"> </i>Chat</a>--}}
{{--                    <a href="#"  class="btn  btn-success mx-2"><i class="fa fa-phone mr-2"></i>Contact</a>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}

        <div class="row mb-5">

            <div class="col-lg-6 col-md-6 col-sm-12 p-5  rounded shadow  shadow-success">
                <h4>  Contact & Personal info:</h4>
                <hr>
                <p><i class="fa fa-globe"></i> Website </p>
                <p><a href="#">www.KwaZuluNatal.co.ke</a></p>
                <p><i class="fa fa-envelope"></i> Email </p>
                <p><a href="#">@info.KwaZuluNatal.co.ke</a></p>

                <hr>
                <p>   <i class="fa fa-map-marker mr-2"></i>  Find us <a href="#">Here</a> </p>


            </div>
            <hr>
            <div class="col-lg-6 col-md-6 col-sm-12 p-5  rounded shadow">
                <table class="table">
               <thead> <h4>   products: </h4></thead>
                <hr>
                    <tbody>
               <tr>
                   <td><p><strong>ID:</strong>123456</p></td>

               <td> <p><strong>Name:</strong>123456</p></td>

               <td> <p><strong>cost:Kshs</strong>456</p></td>

               <td> <p><strong>Quantity: Items</strong>34</p></td>


                    </tbody>
                </table>
            </div>
        </div>


    </div>

    </div>



@endsection
