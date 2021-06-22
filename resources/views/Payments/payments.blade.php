@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row align-self-center bg-success">
            <strong><h4>Payments</h4></strong>
        </div>
        <div class="col col-lg-6 col-md-4 col-sm-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email.</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Transaction Time</th>
                </tr>
                </thead>
                <tbody>
                <tr scope="row">
                    <td>1</td>
                    <td>Martin</td>
                    <td>Martin@gmail.com</td>
                    <td>072334479</td>
                    <td>231</td>
                    <td>25/2/2021:1200hrs</td>
                </tr>
                <tr scope="row">
                    <td>2</td>
                    <td>Martin</td>
                    <td>Martin@gmail.com</td>
                    <td>072334479</td>
                    <td>231</td>
                    <td>25/2/2021:1200hrs</td>
                </tr>
                <tr scope="row">
                    <td>3</td>
                    <td>Martin</td>
                    <td>Martin@gmail.com</td>
                    <td>072334479</td>
                    <td>231</td>
                    <td>25/2/2021:1200hrs</td>
                </tr>
                <tr scope="row">
                    <td>4</td>
                    <td>Martin</td>
                    <td>Martin@gmail.com</td>
                    <td>072334479</td>
                    <td>231</td>
                    <td>25/2/2021:1200hrs</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection
