

@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        @if (session('message'))
            <div class="alert alert-success" role="alert">
                {{ session('message') }}
            </div>

        @endif

        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>

        @endif

        <div class="row justify-content-center">
            <h2 class="bg-warning">Customers</h2>
        </div>


        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <section class="card border-0 shadow-sm">
                    <section class="card-header">
                        <div class="row">
                            <h4 class="card-title my-auto ml-3">All customers</h4>
                            <a href="{{ route('create.product') }}" class="btn btn-danger ml-auto ">
                                <i class="fa fa-user fa-2x " aria-hidden="true" ></i>Add a Customer</a>
                        </div>
                    </section>
                    <div class="card-body">
                        <table id="datatable" class="table table-secondary table-bordered table-striped table-hover">
                            <thead>
                            <tr  class="bg-success">
                                <td>ID</td>
                                <td>Name</td>
                                <td>Location</td>
                                <td>Phone Number</td>
                                <td>Last purchase</td>
                                <td>Delivery Status</td>
                                <td>Profile</td>
                            </tr>
                            </thead>

                            @foreach ($customer as $customer )
                                <tr>
                                    <td>{{ $customer->id }}</td>
                                    <td>{{$customer->name }}</td>
                                    <td>{{ $customer->location }}</td>
                                    <td>{{ $customer->phone_number }}</td>
                                    <td>{{ customer->customer_id }}</td>
                                    <td>{{ $customer->created_at }}</td>
                                    <td>
                                        <a href="{{route('details.product',$product->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i></a>
                                        {{--                                        <a href="{{ route('edit.product', $product->id) }}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>--}}
                                        {{--                                        <a href="{{ route('delete.product', $product->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>--}}
                                        </a>
                                    </td>

                                </tr>
                                @endforeach
                                </tbody>
                        </table>

                    </div>
                </section>
            </div>

        </div>
    </div>




@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        } );
    </script>
@endsection
