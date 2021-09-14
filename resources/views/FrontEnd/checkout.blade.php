@extends('layouts.frontend-master')
@section('content')
    <!-- Shopping Cart -->
<div class="shopping-cart section">
    <div class="container">
        <h3 class="text-center my-5 font-weight-bold text-teal" id="title">Your Cart Products ({{$cart_products->count()}})</h3>
        <div class="row">

            <div class="col-12">
                <!-- Shopping Summery -->
                <table class="table table-bordered shopping-summery">
                    <thead>
                    <tr class="main-heading">
                        <th>PRODUCT</th>
                        <th>NAME</th>
                        <th class="text-center">PRODUCT</th>
                        <th class="text-center">QUANTITY</th>
                        <th class="text-center">TOTAL</th>
                        <th class="text-center">REMOVE</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cart_products as $product)


                        <tr id="cart_{{$product->id}}">
                        <td class="image"><img src="{{ asset('storage/images/'.$product->product->image_url)}}" width="70px" height="70px" alt="#"></td>
                        <td class="product-description" data-title="Description">
                            <p class="product-name text-teal font-weight-bold">{{$product->product->name}}</p>
{{--                            <p class="product-description">{{$product->product->short_description}}</p>--}}
                        </td>
                        <td class="price" data-title="Price"><span>Kshs {{ $product->product->cost }} </span></td>
                        <td class="qty" data-title="Qty">
                            <!-- Input Order -->
                            <div class="input-group">
                                <div class="button minus">
                                    <button type="button" class="btn btn-teal btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" name="quantity[1]" class="input-number"  data-min="1" data-max="100" value="1">
                                <div class="button plus">
                                    <button type="button" class="btn btn-teal btn-number" data-type="plus" data-field="quantity[1]">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <!--/ End Input Order -->
                        </td>
                        <td class="total-amount" id="total_{{$product->id}}" data-title="Total"><span>Kshs. {{ $product->product->cost }}</span></td>
                        <td class="action text-center" data-title="Remove"><a href="javascript:void(0)" id="removeCart" data-id="{{ $product->id}}" class="btn btn-outline-danger border-0 text-center"><i class="fa fa-trash remove-icon fa-lg"></i></a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <!--End Shopping Summery -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- Total Amount -->
                <div class="total-amount">
                    <div class="row">
                        <div class="col-lg-8 col-md-5 col-12">
                            <div class="left">
                                <div class="coupon">
                                    <form action="#" target="_blank">
                                        <input name="Coupon" placeholder="Enter Your Coupon">
                                        <button class="btn">Apply</button>
                                    </form>
                                </div>
                                <div class="checkbox">
                                    <label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox"> Shipping (+10$)</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-7 col-12">
                            <div class="right">
                                <ul>
                                    <li>Cart Subtotal<span></span></li>
                                    <li>Transport<span>Free</span></li>
                                    <li>You Save<span>Kshs 20.00</span></li>
                                    <li class="last">You Pay<span id="grand_total">$310.00</span></li>
                                </ul>
                                <div class="button5">
                                    <a href="#" class="btn">Checkout</a>
                                    <a href="#" class="btn">Continue shopping</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Total Amount -->
            </div>
        </div>
    </div>
</div>
<!--/ End Shopping Cart -->
    @endsection

@section('scripts')

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>

        $(document).ready(function(){

            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })


            $("#removeCart").click(function (){

                let quantity = 1;
                let id = this.dataset.id
                let cart_quantity = {{$cart_products->count()}}

                if (confirm("Are you sure you want to remove this item from cart?")){
                    $.ajax({
                        type: "POST",
                        url:"{{route('remove.cart')}}",
                        data:{
                            'id':id,
                        },
                        success: function(data){

                            // Here show user success e.g sweet alert or something

                            // window.location.reload();
                            $("#cart_"+id).remove()
                            cart_quantity--;
                            $("#title").text("Your Cart Products ("+cart_quantity+")")
                            Swal.fire({
                                icon: 'success',
                                title: 'Removed',
                                text: 'Cart item removed successfully!',
                            })

                        },
                        error:function(data){

                            // notify user that something went wrong
                            console.log(data)
                        }
                    })
                }
                else{

                }

                /**
                 * TODO: Add success and error notifications to user
                 */



            });

        });
    </script>

@endsection
