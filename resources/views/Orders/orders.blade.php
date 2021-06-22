@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row align-self-center">
           <h4>List of Orders</h4>
        </div>
        <div class="col col-lg-6 col-md-4 col-sm-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email.</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Location</th>
                    <th scope="col">Status</th>
                </tr>
                </thead>
                <tbody>
                <tr scope="row">
                    <td>1</td>
                    <td>Martin</td>
                    <td>Martin@gmail.com</td>
                    <td>072334479</td>
                    <td>Thika Road</td>
                    <td>25Minutes ETA</td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>

@endsection
