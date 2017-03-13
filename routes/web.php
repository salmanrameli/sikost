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

Route::get('admin/all_users', [
    'as' => 'admin.allUser',
    'uses' => 'AdminController@showAll'
]);

Route::get('admin/new_admin', [
    'as' => 'admin.admin_create',
    'uses' => 'AdminController@createAdmin'
]);

Route::get('room/availability', [
    'as' => 'room.check_availability',
    'uses' => 'RoomController@checkAvailability'
]);

Route::get('room/room_list', [
    'as' => 'room.room_list',
    'uses' => 'RoomController@changeRoomNumber'
]);

Route::get('room/remove', [
    'as' => 'room.remove',
    'uses' => 'RoomController@removeRoom'
]);

Route::get('/', function () {
    return view('welcome');
});

Route::resource('admin', 'AdminController');

Route::resource('user', 'UserController');

Route::resource('room', 'RoomController');

Route::resource('transaction', 'TransactionController');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

//Route::get('/home', 'HomeController@index');
