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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware'=>'auth'], function(){
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
    Route::get('/offer',[App\Http\Controllers\OfferController::class,'index'])->name('business');
    Route::get('/create/offer', [\App\Http\Controllers\OfferController::class,'create'])->name('create.offer');
    Route::post('/store/offer', [\App\Http\Controllers\OfferController::class,'store'])->name('store.offer');
    Route::get('/details/offer/{id}', [\App\Http\Controllers\OfferController::class,'show'])->name('details.offer');
    Route::get('/orders',[App\Http\Controllers\OrdersController::class,'index'])->name('orders');
    Route::get('/create/orders', [\App\Http\Controllers\OrdersController::class,'create'])->name('create.orders');
    Route::post('/store/orders', [\App\Http\Controllers\OrdersController::class,'store'])->name('store.orders');
    Route::get('/details/orders/{id}', [\App\Http\Controllers\OrdersController::class,'show'])->name('details.orders');
    Route::get('/customer',[App\Http\Controllers\CustomerController::class,'index'])->name('customer');
    Route::get('/create/customer', [\App\Http\Controllers\CustomerController::class,'create'])->name('create.customer');
    Route::post('/store/customer', [\App\Http\Controllers\CustomerController::class,'store'])->name('store.customer');
    Route::get('/details/customer/{id}', [\App\Http\Controllers\CustomerController::class,'show'])->name('details.customer');
    Route::get('create/category', [App\Http\Controllers\CategoryController::class, 'create'] )->name('create.category');
    Route::get('categories', [App\Http\Controllers\CategoryController::class, 'index'] )->name('category');
    Route::get('edit/category/{id}', [App\Http\Controllers\CategoryController::class, 'edit'] )->name('edit.category');
    Route::post('update/category/{id}', [App\Http\Controllers\CategoryController::class, 'update'] )->name('update.category');
    Route::post('store/category', [App\Http\Controllers\CategoryController::class, 'store'] )->name('store.category');
});
