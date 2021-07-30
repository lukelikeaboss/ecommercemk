<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes(["verify"=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware'=>'auth'], function(){
    Route::get('/frontend',[App\Http\Controllers\FrontEndController::class, 'show'])->name('product_details');
    Route::get('/products',[App\Http\Controllers\ProductController::class,'index'])->name('product');
    Route::get('/create/product', [\App\Http\Controllers\ProductController::class,'create'])->name('create.product');
    Route::post('/store/product', [\App\Http\Controllers\ProductController::class,'store'])->name('store.product');
    Route::get('/details/product/{id}', [\App\Http\Controllers\ProductController::class,'show'])->name('details.product');
    Route::get('/business',[App\Http\Controllers\BusinessController::class,'index'])->name('business');
    Route::get('/create/business', [\App\Http\Controllers\BusinessController::class,'create'])->name('create.business');
    Route::post('/store/business', [\App\Http\Controllers\BusinessController::class,'store'])->name('store.business');
    Route::get('/details/business/{id}', [\App\Http\Controllers\BusinessController::class,'show'])->name('details.business');
    Route::get('/payment',[App\Http\Controllers\PaymentController::class,'index'])->name('payment');
    Route::get('/create/payment', [\App\Http\Controllers\PaymentController::class,'create'])->name('create.payment');
    Route::post('/store/payment', [\App\Http\Controllers\PaymentController::class,'store'])->name('store.payment');
    Route::get('/details/payment/{id}', [\App\Http\Controllers\PaymentController::class,'show'])->name('details.payment');
    Route::get('/offers',[App\Http\Controllers\OfferController::class,'index'])->name('offers');
    Route::get('/create/offer', [\App\Http\Controllers\OfferController::class,'create'])->name('create.offers');
    Route::post('/store/offer', [\App\Http\Controllers\OfferController::class,'store'])->name('store.offers');
    Route::get('/details/offer/{id}', [\App\Http\Controllers\OfferController::class,'show'])->name('details.offers');
    Route::get('/orders',[App\Http\Controllers\OrdersController::class,'index'])->name('orders');
    Route::get('/create/orders', [\App\Http\Controllers\OrdersController::class,'create'])->name('create.orders');
    Route::post('/store/orders', [\App\Http\Controllers\OrdersController::class,'store'])->name('store.orders');
    Route::get('/details/orders/{id}', [\App\Http\Controllers\OrdersController::class,'show'])->name('details.orders');
    Route::get('/vouchers',[App\Http\Controllers\VoucherController::class,'index'])->name('vouchers');
    Route::get('/create/orders', [\App\Http\Controllers\VoucherController::class,'create'])->name('create.vouchers');
    Route::post('/store/orders', [\App\Http\Controllers\VoucherController::class,'store'])->name('store.vouchers');
    Route::get('/details/orders/{id}', [\App\Http\Controllers\VoucherController::class,'show'])->name('details.vouchers');
    Route::get('/details/orders/{id}', [\App\Http\Controllers\VoucherController::class,'show'])->name('delete.vouchers');
    Route::get('/voucher',[App\Http\Controllers\VoucherController::class,'index'])->name('voucher');
    Route::get('/create/voucher', [\App\Http\Controllers\VoucherController::class,'create'])->name('create.vouchers');
    Route::post('/store/voucher', [\App\Http\Controllers\VoucherController::class,'store'])->name('store.voucher');
    Route::get('/details/voucher/{id}', [\App\Http\Controllers\VoucherController::class,'show'])->name('details.vouchers');
    Route::get('/delete/voucher/{id}', [\App\Http\Controllers\VoucherController::class,'destroy'])->name('delete.vouchers');
    Route::get('/customer',[App\Http\Controllers\CustomerController::class,'index'])->name('customer');
    Route::get('/create/customer', [\App\Http\Controllers\CustomerController::class,'create'])->name('create.customer');
    Route::post('/store/customer', [\App\Http\Controllers\CustomerController::class,'store'])->name('store.customer');
    Route::get('/details/customer/{id}', [\App\Http\Controllers\CustomerController::class,'show'])->name('details.customer');
    Route::get('create/category', [App\Http\Controllers\CategoryController::class, 'create'] )->name('create.category');
    Route::get('categories', [App\Http\Controllers\CategoryController::class, 'index'] )->name('category');
    Route::get('edit/category/{id}', [App\Http\Controllers\CategoryController::class, 'edit'] )->name('edit.category');
    Route::post('update/category/{id}', [App\Http\Controllers\CategoryController::class, 'update'] )->name('update.category');
    Route::post('store/category', [App\Http\Controllers\CategoryController::class, 'store'] )->name('store.category');
    Route::get('details/category/{id}', [App\Http\Controllers\CategoryController::class, 'show'] )->name('details.category');
    Route::post('delete/category', [App\Http\Controllers\CategoryController::class, 'delete'] )->name('delete.category');
});
Route::get('/redirect', [App\Http\Controllers\Auth\LoginController::class, 'redirectToProvider']);
Route::get('/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleProviderCallback']);


//Frontend routes

Route::get( '/',[App\Http\Controllers\FrontEndController::class,'home'])->name('home');
Route::get( '/load/all',[App\Http\Controllers\FrontEndController::class,'home2'])->name('load_all_products');
Route::get( '/FrontEnd',[App\Http\Controllers\FrontEndController::class,'products'])->name('product_list.frontend');
Route::get('details/product/frontend/{id}', [App\Http\Controllers\FrontEndController::class,'productDetails'])->name('details.frontend');
Route::post('checkout/frontend{id}', [App\Http\Controllers\FrontEndController::class,'store'])->name('checkout.frontend');

