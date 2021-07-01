@extends('layouts.app')

@section('content')
    <title>New Payment</title>
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
                <i class="fas fa-coins fa-3"></i>
                Pay here</h2>
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
                                <input type="text" name="name" class="form-control" placeholder="Your  name">
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
                                <label for="inputstate">Payment method</label>
                                <select id="inputstate" name="platform" class="form-control">
                                    <option selected>Choose a category:</option>
                                    <option><i class="fa fa-paypal"></i>Paypal</option>
                                    <option><i class="fa fa-cc-visa"></i> Visa</option>
                                    <option> <i class="fa fa-mobile"></i> Mobile money</option>
                                    <option> <i class="fa fa-money"></i> Cash on Delivery</option>
                                </select>

                            </div>
                            <div>
                                <label>Amount:</label>
                                <textarea type="number" name="amount" class="form-control" placeholder="amount:">
                            </textarea>
                            </div>
                            <div>
                                <label>Confirmation code:</label>
                                <textarea type="varchar" name="code" class="form-control" placeholder="confirmation code:">
                            </textarea>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    I have read and understood the <a href="#"> terms and conditions</a>.
                                </label>
                            </div>

                            <button type="submit" class="btn btn-success rounded w-50">SEND</button>




                        </form>


                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
