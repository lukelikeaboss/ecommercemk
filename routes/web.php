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
    Route::get('create/category', [App\Http\Controllers\CategoryController::class, 'create'] )->name('create.category');
    Route::get('categories', [App\Http\Controllers\CategoryController::class, 'index'] )->name('category');
    Route::get('edit/category/{id}', [App\Http\Controllers\CategoryController::class, 'edit'] )->name('edit.category');
    Route::post('update/category/{id}', [App\Http\Controllers\CategoryController::class, 'update'] )->name('update.category');
    Route::post('store/category', [App\Http\Controllers\CategoryController::class, 'store'] )->name('store.category');
});
