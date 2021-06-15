@extends('layouts.app')

@section('content')
<div class="container">

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="row justify-content-center mt-4">
        <div class="col-lg-3 col-sm-12 col-md-6">
            <div class="card">
                <div class="card-body text-center">
                    <i class="fa fa-rss fa-2x text-danger mb-3" aria-hidden="true" ></i>
                    <h5>Total Posts</h5>
                    <h6></h6>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-12 col-md-6">
            <div class="card">
                <div class="card-body text-center">
                    <i class="fa fa-star  fa-2x mb-3 text-primary"></i>

                    <h5>Total Projects</h5>
                    <h6></h6>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-12 col-md-6">
            <div class="card">
                <div class="card-body text-center">
                    <i class="fa fa-briefcase fa-2x mb-3 text-primary"></i>

                    <h5>Total Projects</h5>
                    <h6></h6>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-12 col-md-6">
            <div class="card">
                <div class="card-body text-center">
                    <i class="fa fa-archive fa-2x mb-3 text-primary"></i>

                    <h5>Total Projects</h5>
                    <h6></h6>
                </div>
            </div>
        </div>
    </div>
{{--   tables start here--}}
       <div class="row justify-content-center" >
           <div class="col-lg-10 col-md-10 col-sm-12">
               <div class="card-body">
                   <table  class="table table-secondary table-bordered table-striped table-hover datatable">
                       <thead>
                       <tr  class="bg-success">
                           <td>ID</td>
                           <td>Name</td>
                           <td>Description</td>
                           <td>Platform</td>
                           <td>Created at@</td>
                           <td>Actions</td>

                       </tr>
                       </thead>
                       <tbody>

                       <tr >
                           <td>id </td>
                           <td>name</td>
                           <td>this</td>
                           <td>reg.no</td>
                           <td>actions</td>
                           <td>
                               <a href="#" class="btn btn-success btn-sm">edit</a>
                               <a href="#" class="btn btn-success btn-sm">view</a>

                           </td>

                       </tr>
                       </tbody>
                   </table>
               </div>
           </div>
       </div>


        <div class="row justify-content-center" >
            <div class="col-lg-10 col-md-10 col-sm-12">
                <div class="card-body">
                    <table  class="table table-secondary table-bordered table-striped table-hover datatable">
                        <thead>
                        <tr  class="bg-success">
                            <td>ID</td>
                            <td>Name</td>
                            <td>Description</td>
                            <td>Platform</td>
                            <td>Created at@</td>
                            <td>Actions</td>

                        </tr>
                        </thead>
                        <tbody>
@yield('content')
                        <tr >
                            <td>id </td>
                            <td>name</td>
                            <td>this</td>
                            <td>reg.no</td>
                            <td>actions</td>
                            <td>
                                <a href="#" class="btn btn-success btn-sm">edit</a>
                                <a href="#" class="btn btn-success btn-sm">view</a>

                            </td>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
@endsection
