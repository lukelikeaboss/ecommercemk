@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-6 col-md-6 col-sm-12 my-auto">
                <img src="{{ asset('pics/avataaars.svg')}}" class="img-thumbnail card-img rounded mb-3 img-box rounded-circle"  alt="avatar">
                <h3><strong>Seller:{{$customer->name}}</strong></h3>
                <a href="#" class="btn btn-success rounded"><i class="fa fa-user"></i>Profile </a>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 p-5  rounded shadow">

                <h4>Customer Information</h4>
                <hr>

                <p><strong>Name:</strong> Mr Kamau</p>
                <p><strong>Location:</strong> Thika SuperHighway, Exit 16, Juja MainRoad. Highway plaza<i class="fa fa-map-marker" aria-hidden="true"></i>
                </p>

                <div class="row ">
                    <a href="#"  class="btn  btn-outline-success  mx-2 "><i class="fa fa-whatsapp mr-2"> </i>Chat</a>
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
                <p><i class="fa fa-phone"></i> Phone Number </p>
                <p><a href="#" class="btn btn-success rounded">072212434</a></p>
                <p><i class="fa fa-envelope"></i> Email </p>
                <p><a href="#">WaKamau@gmail.com</a></p>

                <hr>
                <p> <a href="#">  <i class="fa fa-map-marker fa-3 mr-2"></i>  Pin your location Here</a> </p>


            </div>
            <hr>
            <div class="col-lg-6 col-md-6 col-sm-12 p-5  rounded shadow">
                <table class="table">
                    <thead> <h4>   Name: </h4></thead>
                    <hr>
                    <tbody>
                    <tr>
                        <td><p><strong>ID:</strong>123456</p></td>

                        <td> <p><strong>Name:</strong>123456</p></td>

                        <td> <p><strong>Location</strong>Kahawa 2</p></td>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="yes" id="yes1" value="option1" >
                            <label class="form-check-label" for="yes1">
                                Default radio
                            </label>
                            <input class="form-check-input" type="radio" name="no" id="no1" value="option1" checked >
                            <label class="form-check-label" for="no1">
                                Default radio
                            </label>
                       <td> <p><strong>On-going transaction</strong></p></td>
                        </div>

                        <td> <p><strong>Quantity: Items</strong>34</p></td>



                    </tbody>
                </table>
            </div>
        </div>


    </div>

    </div>



@endsection
