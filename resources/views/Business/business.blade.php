

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
            <h2 class="bg-warning">All Businesses</h2>
        </div>


        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <section class="card border-0 shadow-sm">
                    <section class="card-header">
                        <div class="row">
                            <h4 class="card-title my-auto ml-3">All Businesses</h4>
                            <a href="#" class="btn btn-danger ml-auto ">
                                <i class="fa fa-plus " aria-hidden="true" ></i>Add Business</a>
                        </div>
                    </section>
                    <div class="card-body">
                        <table id="datatable" class="table table-secondary table-bordered table-striped table-hover">
                            <thead>
                            <tr  class="bg-success">
                                <td>ID</td>
                                <td>Name</td>
                                <td>Amount</td>
                                <td>Quantity</td>
                                <td>Business</td>
                                <td>Created at@</td>
                                <td>Actions</td>
                            </tr>
                            </thead>

                            @foreach ($Businesses as $Business )
                                <tr>
                                    <td>{{ $Business ->id }}</td>
                                    <td>{{$Business ->name }}</td>
                                    <td>{{ $Business ->cost }}</td>
                                    <td>{{ $Business ->quantity }}</td>
                                    <td>{{ $Business ->business_id }}</td>
                                    <td>{{ Business ->created_at }}</td>
                                    <td>
                                        <a href="{{route('details.Business ',$Business ->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i></a>
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
