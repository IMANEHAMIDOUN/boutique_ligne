<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Admincontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

route::get('/',[Homecontroller::class,'index']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
route::get('/redirect',[Homecontroller::class,'redirect']);

route::get('/view_Category',[Admincontroller::class,'view_Category']);


route::post('/add_category',[Admincontroller::class,'add_category']);
Route::get('update_category/{id}','App\Http\Controllers\AdminController@update_category');
Route::post('update_category_confirm/{id}','App\Http\Controllers\AdminController@update_category_confirm');
route::get('/delete_category/{id}',[Admincontroller::class,'delete_category']);

route::get('/view_product',[Admincontroller::class,'view_product']);


route::post('/add_product',[Admincontroller::class,'add_product']);
route::get('/show_product',[Admincontroller::class,'show_product']);
route::get('/delete_product/{id}',[Admincontroller::class,'delete_product']);
route::get('/update_product/{id}',[Admincontroller::class,'update_product']);
route::post('/update_product_confirm/{id}',[Admincontroller::class,'update_product_confirm']);

route::get('/product_details/{id}',[Homecontroller::class,'product_details']);

route::post('add_cart/{id}',[Homecontroller::class,'add_cart']);

route::get('/show_cart',[Homecontroller::class,'show_cart']);

route::get('/remove_cart/{id}',[Homecontroller::class,'remove_cart']);

route::get('/cash_order',[Homecontroller::class,'cash_order']);

route::get('/order',[Admincontroller::class,'order']);


route::get('/delivered/{id}',[Admincontroller::class,'delivered']);


