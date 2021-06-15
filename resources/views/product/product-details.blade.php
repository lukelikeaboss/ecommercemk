@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <p>Product details</p>

            <button type="edit" class="btn  btn-success mt-2 w-50"><i class="fa fa-edit">Edit</button>
            <button type="Delete" class="btn  btn-success mt-2 w-50"><i class="fa fa-trash"></i>Delete</button>

        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="img-box img-fluid">
                <img src="{{ asset('pics/wallpaperbetter(1).jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="col">
                <div class="table">
                    <div class="card-header">
                        <p>seller info</p>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>
                                Name:<a href="#">Name</a>
                            </li>
                        </ul><ul>
                            <li>
                                Number:
                            </li>
                        </ul>
                        <button type="button" class="btn-success btn">Chat</button>
                        <button type="button" class="btn-success btn">Contact</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="col-md-6">
                <p>Description:</p>
                <br>
                <p>here are some other lines that you should read</p>
            </div>
        </div>
        <div class="col">
            <div class="col-md-6">
                <p>More details:</p>
                <br>
                <p>Cost:</p>
                <p>Quantity:</p>
                <p>Rating:</p>

            </div>
        </div>
    </div>
</div>



@endsection
