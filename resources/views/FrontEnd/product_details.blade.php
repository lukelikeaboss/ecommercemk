@extends('layouts.frontend-master')


@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="col-lg-6 col-md-4 col-sm-12">
                <a href="#" ><img src=""></a>

            </div>
            <div class="col">
                <p>{{$product->name}}</p>
                <hr>
                <p>{{$product->description}}</p>
                <p>{{$product->amount}}</p>
                <hr>
                <button class="btn btn-success">buy now</button>
                <button type="button" id="addCart" data-id="{{$product->id}}" class="btn btn-info">Add to cart</button>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header"><strong>seller info</strong></div>
                    <hr>
                    <p>{{$product->business->phone_number}}</p>
                    <p> @if ($product->business->locations->count() == 0 )
                        No location added
                        @else
                        {{$product->business->locations->first()->pin}}
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col"> <strong>Description</strong>
    <hr>
    <p>{{$product->description}}</p>
    <button class="btn-success">Add to wish list</button>
    </div>
    </div>
    <div class="col">
        <strong>Reviews</strong>
        <hr>
        <button class="btn-outline-info rounded">Add Review</button>
    </div>
    <hr>
    <div class="row">

        <h5>Related Products</h5>
        <div class="col col-md-6">
            <div class="card">
                <a href="#"><img src="#" alt="product pic"></a>
                <p>product name</p>
                <p>product description</p>
            </div>
        </div>
        <div class="col col-md-6">
            <div class="card">
                <a href="#"><img src="#" alt="product pic"> </a>
                <p>product name</p>
                <p>product description</p>
            </div>
        </div>
        <div class="col col-md-6">
            <div class="card">
                <a href="#"><img src="#" alt="product pic"> </a>
                <p>product name</p>
                <p>product description</p>
            </div>
        </div>
    </div>
</div>
{{--swal({--}}
{{--title: "Good job!",--}}
{{--text: "You clicked the button!",--}}
{{--icon: "success",--}}
{{--});--}}
@endsection

@section('scripts')

    <script type="text/javascript">
        $('.product-icon-container').find('a').click(function (event){
            event.preventDefault();
            $.ajax({
                url: $(this).attr('href')
                ,success: function(response) {
                    alert(response)
                }
            });
            return false; //for good measure
        });


        $(document).ready(function(){

            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })
        });

        $("#addCart").click(function (){

            let quantity = 1;
            product_id = this.id

            /**
             * TODO: Add success and error notifications to user
             */

            $.ajax({
                type: "POST",

                url:"{{route('add.cart')}}",
                data:{
                    'quantity': quantity,
                    'product_id':product_id,
                },
                success: function(data){

                    // Here show user success e.g sweet alert or something

                    console.log();
                },
                error:function(data){

                    // notify user that something went wrong
                    console.log(data)
                }
            })
        });


        function addToCart(product_id){



        }
    </script>

@endsection
