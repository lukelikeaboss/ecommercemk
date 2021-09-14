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
                            </div>  <div class="form-group">
                                <label> Phone Number:</label>
                                <input type="varchar" name="phone_number" class="form-control" placeholder="Mobile Phone no.">
                            </div>
                            <div class="form-group">
                                <label>Email:</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter  email">
                            </div>
                            <div class="form-group">
                                <label> Type of Business:</label>
                                <input type="text" name="business_number" class="form-control" placeholder="Business Name">
                            </div>

                            <div>
                                <label>Business description:</label>
                                <textarea  name="short-description" class="form-control" placeholder="About your business:">
                            </textarea>
                            </div>
                            <div>
                                <a target="_blank" href="https://www.google.com/maps/" ><label>Business location:</label></a>
                                <input type="text" name="pin" class="form-control" placeholder="Location of your business:">
                            </input>
                            </div>
                            <div>
                                <label>Product:</label>
                                <textarea type="text" name="description" class="form-control" placeholder="Product description:">
                            </textarea>
                            </div>
                            <div>
                                <label>Password:</label>
                                <textarea input="password" type="password" name="password" class="form-control" placeholder="Password:">
                            </textarea>
                            </div>
                            <div>
                                <label>business number:</label>
                                <textarea input="number" type="number" name="business_number" class="form-control" placeholder="Businness number:">
                            </textarea>
                            </div>
                            <div class="form-group">
                                <input type="file"  name="image" class="form-control" placeholder="">
                                <label> external link</label> <input type="text" name="external_url" class="form-control" placeholder="Product website">
                                <label> avatar</label> <input type="file" name="avatar_url" class="form-control" placeholder="A picture of yourself">
                            </div>

{{--                            <div class="form-group">--}}
{{--                                <label for="inputstate">Category</label>--}}
{{--                                <select id="inputstate" name="platform" class="form-control">--}}
{{--                                    <option selected>Choose a category:</option>--}}
{{--                                    <option>Product A</option>--}}
{{--                                    <option> Product B</option>--}}
{{--                                    <option> Product C</option>--}}
{{--                                    <option> Product D</option>--}}
{{--                                </select>--}}

{{--                            </div>--}}
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
