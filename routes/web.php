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

Route::get('/login', 'LoginController@login');
Route::post('login/top', 'LoginController@top');
Route::get('login/add', 'UserLoginController@show');
Route::post('login/add/check', 'UserLoginController@add');
Route::post('login/add/check', 'UserLoginController@create');