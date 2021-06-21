@extends('layouts.app')

@section('content')
<title>New business</title>
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
                <i class="fa fa-home"></i>
                Starting Business with us?</h2>
        </div>
        <hr>

        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="card shadow border-0">
                    <div class="card-body border-info bg-info my-auto mx-2 ">
                        <h4>Register With Us,<p></h4><h3><i> your faithful business partner</i></p></h3>
                        <form action="{{ route('store.business') }}" method="post" enctype="multipart/form-data">
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
                                <label> Type of Business:</label>
                                <input type="text" name="business_number" class="form-control" placeholder="Business Name">
                            </div>

                            <div>
                                <label>Phone numberr:</label>
                                <textarea  name="short-description" class="form-control" placeholder="Phone Number:">
                            </textarea>
                            </div>
                            <div>
                                <label>Product:</label>
                                <textarea type="text" name="description" class="form-control" placeholder="Goods of your trade:">
                            </textarea>
                            </div>
                            <div class="form-group">
                                <input type="file"  name="image" class="form-control" placeholder="">
                                <label> Product Image Sample:</label> <input type="text" name="code_url" class="form-control" placeholder="Product">
                            </div>

                            <div class="form-group">
                                <label for="inputstate">Category</label>
                                <select id="inputstate" name="platform" class="form-control">
                                    <option selected>Choose a category:</option>
                                    <option>Product A</option>
                                    <option> Product B</option>
                                    <option> Product C</option>
                                    <option> Product D</option>
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
