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

Route::get('admin/all_users', [
    'as' => 'admin.allUser',
    'uses' => 'AdminController@showAll'
]);

Route::get('/', function () {
    return view('welcome');
});

Route::resource('admin', 'AdminController');

Route::resource('user', 'UserController');

Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

//Route::get('/home', 'HomeController@index');
