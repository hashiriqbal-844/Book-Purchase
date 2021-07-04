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

Route::get('/','App\Http\Controllers\FrontEndController@product');
Route::get('/index/showproduct/{id}','App\Http\Controllers\FrontEndController@show');
Route::post('/index/addcart','App\Http\Controllers\ShoppingController@cart');
Route::get('/index/cart','App\Http\Controllers\ShoppingController@cartpage');
Route::get('/index/productdelete/{id}','App\Http\Controllers\ShoppingController@delete');
Route::get('/index/productincr/{id}/{qty}','App\Http\Controllers\ShoppingController@incr');
Route::get('/index/productdecr/{id}/{qty}','App\Http\Controllers\ShoppingController@decr');
Route::get('/index/rapid/{id}/','App\Http\Controllers\ShoppingController@rapid_add');
Route::get('/index/checkout','App\Http\Controllers\CheckoutController@index');
Route::post('/index/checkout','App\Http\Controllers\CheckoutController@pay');










Route::get('/index','App\Http\Controllers\CrudController@index');
Route::post('/index/insert','App\Http\Controllers\CrudController@store');
Route::get('/index/show','App\Http\Controllers\CrudController@show');
Route::get('/index/edit/{id}','App\Http\Controllers\CrudController@edit');
Route::get('/index/delete/{id}','App\Http\Controllers\CrudController@delete');
Route::post('/index/update','App\Http\Controllers\CrudController@update');






