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

// Route::get('/index', '');

Route::get('/order-admin', 'AdminController@orders')->name('order-admin');
Route::get('/detailorder-admin/{id}', 'AdminController@detailOrder');

Route::get('/user', 'AdminController@user')->name('user');

Route::get('/orders', 'CustomerController@orders')->name('orders');
Route::get('/detailorder-user/{id}', 'CustomerController@detailOrder');

Route::get('/tiket', 'CustomerController@tiket')->name('tiket');
Route::post('/createtiket', 'CustomerController@createtiket')->name('createtiket');

Route::get('/peserta/{id}', 'CustomerController@peserta')->name('peserta');
Route::post('/createpeserta', 'CustomerController@createpeserta')->name('createpeserta');

// Route::get('/peserta', 'CustomerController@peserta');
// Route::post('/createpeserta', 'CustomerController@createtiket')->name('createpeserta');
// Route::get('/hasilpeserta', 'CustomerController@hasilpeserta');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
