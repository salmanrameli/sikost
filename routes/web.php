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
Auth::routes();

Route::get('room/availability', [
    'as' => 'room.check_availability',
    'uses' => 'RoomController@checkAvailability'
]);

Route::get('room/remove', [
    'as' => 'room.remove',
    'uses' => 'RoomController@removeRoom'
]);

Route::get('renter/all', [
    'as' => 'user.allRenter',
    'uses' => 'UserController@allRenter'
]);

Route::get('admin/all', [
    'as' => 'admin.all',
    'uses' => 'adminController@showAll'
]);

Route::get('payments/all', [
    'as' => 'payment.all',
    'uses' => 'PaymentController@showAll'
]);

Route::get('/', function () {
    return view('welcome');
});

Route::resource('admin', 'AdminController');

Route::resource('user', 'UserController');

Route::resource('room', 'RoomController');

Route::resource('transaction', 'TransactionController');

Route::resource('payment', 'PaymentController');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

//Route::get('/home', 'HomeController@index');
