@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-6 col-md-6 col-sm-12 my-auto">
               <img src="{{ asset('storage/images/'.$business->avatar_url)}}" class="img-thumbnail card-img rounded mb-3 img-box rounded-circle"  alt="avatar">
                <h3><strong>Seller:{{$business->name}}</strong></h3>
                <a href="tel:{{$business->phone_number}}" class="btn btn-success rounded"><i class="fa fa-phone"></i> Call</a>
                <a href="#"  class="btn  btn-success  mx-2 "><i class="fa fa-edit"> </i>Edit</a>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 p-5  rounded shadow">

                <h4>Business Info</h4>
                <hr>

                <p><strong>Name:</strong> {{$business->name}}</p>
                <div id='map' style='width: 400px; height: 300px;'></div>
                <script>
                    mapboxgl.accessToken = 'pk.eyJ1IjoiZWxwdXRva2ltIiwiYSI6ImNrcW1lODVqbDAxbWIydXN0emNqazgxbWwifQ.uQtYcX7qTh0YiLqD-T7PLQ';
                    var map = new mapboxgl.Map({
                        container: 'map',
                        style: 'mapbox://styles/mapbox/streets-v11'
                    });
                </script>

                {{--                <p><strong>Location:    </strong><a class="btn btn-info" target="_blank" href="{{$business->location()->first()->pin}}"><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i>--}}
{{--                   find us on google </a> </p>--}}

                <div class="row ">
                    <a href=mailto:"{{$business->email}}"  class="btn  btn-outline-success  mx-2 "><i class="fa fa-comment mr-2"> </i>Chat</a>
                    <a href=tel:"{{$business->phone_number}}"  class="btn  btn-success mx-2"><i class="fa fa-phone mr-2"></i>Contact</a>
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
                <p><a target="_blank" href="http://{{$business->external_url}}">follow link</a></p>
                <p><i class="fa fa-envelope"></i> Email </p>
                <p><a target="_blank" href="mailto:{{$business->email}}">Email us</a></p>

                <hr>
                <p>   <i class="fa fa-map-marker mr-2"></i>  Find us <a target="_blank" href="{{$business->location()->first()->pin}}">Here</a> </p>


            </div>
            <hr>
            <div class="col-lg-6 col-md-6 col-sm-12 p-5  rounded shadow">

                 <h4>   Contacts: </h4></thead>
                <hr>


                  <p><strong>ID:</strong>{{$business->business_number}}</p><hr>

                <p><strong>Name:</strong>{{$business->name}}</p><hr>

                <p><strong>phone number:</strong>{{$business->phone_number}}</p><hr>

                <p><strong>Email: </strong></p>{{$business->email}}



            </div>
        </div>


    </div>

    </div>



@endsection
