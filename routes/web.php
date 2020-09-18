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
    return view('index');
});

Route::get('/orders', function () {
    return view('order_managment');
});

Route::get('/register', function(){
    return view('add-employee');
});

Route::get('/profile', function(){
    return view('add-employee');
});

Route::get('/register', function(){
    return view('add-employee');
});


Route::get('/addOrders', 'orderController@goToAdd');
Route::get('/orderList', 'orderController@goToOrder');
Route::get('/viewOrderDetails/{id}', 'orderController@viewDetails');

Route::post('/addNewOrder','orderController@store');
Route::post('/updateOrderStatus','orderController@updateStatus');
Route::post('/deleteOrder','orderController@deleteOrder');