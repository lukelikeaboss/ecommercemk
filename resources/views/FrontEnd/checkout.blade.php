@extends('layouts.frontend-master')
@section('content')
    <!-- Shopping Cart -->
<div class="shopping-cart section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Shopping Summery -->
                <table class="table shopping-summery">
                    <thead>
                    <tr class="main-heading">
                        <th>PRODUCT</th>
                        <th>NAME</th>
                        <th class="text-center">PRODUCT</th>
                        <th class="text-center">QUANTITY</th>
                        <th class="text-center">TOTAL</th>
                        <th class="text-center"><i class="ti-trash remove-icon"></i></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="image"><img src="{{asset(pics/picha.svg)}}" alt="#"></td>
                        <td class="product-description" data-title="Description">
                            <p class="product-name"><a href="#">product 1</a></p>
                            <p class="product-description">Maboriosam in loony toons thee robin to guard down using huge size advantage magndapibus.</p>
                        </td>
                        <td class="price" data-title="Price"><span>Kshs 110.00 </span></td>
                        <td class="qty" data-title="Qty">
                            <!-- Input Order -->
                            <div class="input-group">
                                <div class="button minus">
                                    <button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                        <i class="ti-minus"></i>
                                    </button>
                                </div>
                                <input type="text" name="quantity[1]" class="input-number"  data-min="1" data-max="100" value="1">
                                <div class="button plus">
                                    <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quantity[1]">
                                        <i class="ti-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <!--/ End Input Order -->
                        </td>
                        <td class="total-amount" data-title="Total"><span>Kshs. 220.88</span></td>
                        <td class="action" data-title="Remove"><a href="#"><i class="ti-trash remove-icon"></i></a></td>
                    </tr>
                    <tr>
                        <td class="image" data-title="No"><img src="{{asset(#)}}" alt="#"></td>
                        <td class="product-description" data-title="Description">
                            <p class="product-name"><a href="#">Product 2</a></p>
                            <p class="product-des">Maboriosam in a tonto nesciung eget  distingy magndapibus.</p>
                        </td>
                        <td class="price" data-title="Price"><span>Kshs 110.00 </span></td>
                        <td class="qty" data-title="Qty">
                            <!-- Input Order -->
                            <div class="input-group">
                                <div class="button minus">
                                    <button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[2]">
                                        <i class="ti-minus"></i>
                                    </button>
                                </div>
                                <input type="text" name="quantity[2]" class="input-number"  data-min="1" data-max="100" value="2">
                                <div class="button plus">
                                    <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quantity[3]">
                                        <i class="ti-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <!--/ End Input Order -->
                        </td>
                        <td class="total-amount" data-title="Total"><span>Kshs 220.00 </span></td>
                        <td class="action" data-title="Remove"><a href="#"><i class="ti-trash remove-icon"></i></a></td>
                    </tr>
                    <tr>
                        <td class="image" data-title="No"><img src="#" alt="#"></td>
                        <td class="product-description" data-title="Description">
                            <p class="product-name"><a href="#">Women Dress</a></p>
                            <p class="product-description">Maboriosam in a tonto nesciung eget  distingy magndapibus.</p>
                        </td>
                        <td class="price" data-title="Price"><span>Kshs 110.00 </span></td>
                        <td class="qty" data-title="Qty">
                            <!-- Input Order -->
                            <div class="input-group">
                                <div class="button minus">
                                    <button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[3]">
                                        <i class="ti-minus"></i>
                                    </button>
                                </div>
                                <input type="text" name="quantity[3]" class="input-number"  data-min="1" data-max="100" value="3">
                                <div class="button plus">
                                    <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quantity[3]">
                                        <i class="ti-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <!--/ End Input Order -->
                        </td>
                        <td class="total-amount" data-title="Total"><span>Kshs 220.00</span></td>
                        <td class="action" data-title="Remove"><a href="#"><i class="ti-trash remove-icon"></i></a></td>
                    </tr>
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
                                    <li class="last">You Pay<span>$310.00</span></li>
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
