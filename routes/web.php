<?php

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
Route::resource('/vendors', 'VendorController');
Route::resource('/users', 'UserController');
Route::resource('/customers', 'CustomerController');
Route::resource('/products', 'ProductController');
Route::resource('/orders', 'OrderController');
Route::resource('/orderdetails', 'OrderDetailsController');
//Route::get('/adduser', 'UserController@create');
//Route::post('adduser', 'UserController@store');
 
//Route::get('/login', 'SessionsController@create');
//Route::post('/login', 'SessionsController@store');
//Route::get('/logout', 'SessionsController@destroy');
