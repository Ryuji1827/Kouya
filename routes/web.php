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

/*Route::get('/login',[
    'uses' => 'LoginController@login',
    'as' => 'login.login1'
    ]);
Route::post('/top',[
    'uses' => 'LoginController@postTop',
    'as' => 'top.top'
    ]);*/
#Route::get('/login', 'LoginController@login');
Route::post('login/top', 'LoginController@top');
Route::get('login/add', 'UserLoginController@show');
Route::post('login/add/check', 'UserLoginController@add');
Route::post('login/add/check/create', 'UserLoginController@create');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/top', 'LoginController@top');
Route::get('/top/recruit', 'MainController@recruit');
Route::post('/top/recruit/recruit_conform', 'MainController@recruit_conform');
Route::post('/top/recruit/recruit_conform/recruit_create', 'MainController@recruit_create');