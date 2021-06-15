@extends('layouts.app')

@section('content')

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
        <h3 class="font-weight-bold text-black-50 "><i class="fa fa-edit"></i> Add New Product</h3>
    </div>
    <hr>

    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="card shadow border-0">
                <div class="card-body">
                    <h4>Leave us a message</h4>
                    <form action="{{ route('store.product') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label> Name:</label>
                            <input type="text" name="name" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <label> Quantity:</label>
                            <input type="number" name="quantity" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <label> Cost:</label>
                            <input type="number" name="cost" class="form-control" placeholder="Your Name">
                        </div>
                        <div>
                            <label>Short Description:</label>
                            <textarea  name="short-description" class="form-control" placeholder="Phone Number:">
                            </textarea>
                        </div>
                        <div>
                            <label>Description:</label>
                            <textarea type="text" name="description" class="form-control" placeholder="Remember to leave your name here:">
                            </textarea>
                        </div>
                        <div class="form-group">
                            <input type="file"  name="image" class="form-control" placeholder="">
                            <label> Product Image:</label> <input type="text" name="code_url" class="form-control" placeholder="Product">
                        </div>

                        <div class="form-group">
                            <label for="inputstate">Category</label>
                            <select id="inputstate" name="platform" class="form-control">
                                <option selected>Choose a category:</option>
                                <option>Category A</option>
                                <option> Category B</option>
                                <option> Category C</option>
                                <option> Category D</option>
                            </select>

                        </div>

                        <button type="submit" class="btn btn-success w-50">Submit</button>




                    </form>


                </div>
            </div>
        </div>

    </div>
</div>

@endsection
