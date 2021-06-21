@extends('layouts.app')

@section('content')
    <title>New Customer</title>
    <div class="container ">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error )
                        <li>{{$error }}</li>
                    @endforeach
                </ul>
            </div>

        @endif
        <div class="row justify-content-center">
            <h2 class="font-weight-bold text-black-50 ">
                <i class="fa fa-user fa-3"></i>
                Register here</h2>
        </div>
        <hr>

        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="card shadow border-0">
                    <div class="card-body border-info bg-info my-auto mx-2 ">
                        <h4>Welcome to ecommercemk,<p></h4><h3><i> your faithful business partner</i></p></h3>
                        <form action="{{ route('store.customer') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label> Name:</label>
                                <input type="text" name="name" class="form-control" placeholder="Your First  name">
                            </div>
                            <div class="form-group">
                                <label><i>Last name:</label></i>
                                <input type="name" name="surname" class="form-control" placeholder="Surname">
                            </div>
                            <div class="form-group">
                                <label> Email Address:</label>
                                <input type="text" name="email" class="form-control" placeholder="Email">
                            </div>

                            <div>
                                <label>Phone number:</label>
                                <textarea  name="number" class="form-control" placeholder="Phone Number:">
                            </textarea>
                            </div>
                            <div>
                                <label>Location:</label>
                                <textarea type="text" name="description" class="form-control" placeholder="Where yo want your goods delivered:">
                            </textarea>
                            </div>
                            <div class="form-group">
                                <label> A profile picture:</label>  <input type="file"  name="image" class="form-control" placeholder="profile avatar">
                               <input type="text" name="code_url" class="form-control" placeholder="customer_photo">
                            </div>

                            <div class="form-group">
                                <label for="inputstate">Payment method</label>
                                <select id="inputstate" name="platform" class="form-control">
                                    <option selected>Choose a category:</option>
                                    <option><i class="fa fa-paypal"></i>Paypal</option>
                                    <option><i class="fa fa-cc-visa"></i> Visa</option>
                                    <option> <i class="fa fa-mobile"></i> Mobile money</option>
                                    <option> <i class="fa fa-money"></i> Cash on Delivery</option>
                                </select>

                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    I have read and understood the <a href="#"> terms and conditions</a>.
                                </label>
                            </div>

                            <button type="submit" class="btn btn-success w-50">Register</button>




                        </form>


                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
