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

Route::get('/', 'ConsumerController@index');
Route::get('login', 'LoginController@index');
Route::post('login/store', 'LoginController@store');

Route::get('users', 'UserController@index');
Route::get('users/add', 'UserController@add');
Route::post('users/add', 'UserController@store');
Route::get('users/edit/{id}', 'UserController@edit');
Route::put('users/edit/{id}', 'UserController@update');


Route::get('register', 'RegisterController@index');
Route::post('register/store', 'RegisterController@store');

Route::get('consumers', 'ConsumerController@index');
Route::get('consumers/{id}', 'ConsumerController@getDetails');
Route::get('consumers/updateaddress/{id}', 'ConsumerController@showAddress');
Route::post('consumers/updateaddress/{id}', 'ConsumerController@updateAddress');
Route::get('uploadactive', 'ConsumerController@activelist');
Route::get('uploadblocked', 'ConsumerController@blockedlist');
