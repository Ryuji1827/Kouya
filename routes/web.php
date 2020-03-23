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
/*Route::post('login/top', 'LoginController@top');
Route::get('login/add', 'UserLoginController@show');
Route::post('login/add/check', 'UserLoginController@add');
Route::post('login/add/check/create', 'UserLoginController@create');*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/top', 'LoginController@top')->name('to_the_top');
Route::get('/top/recruit', 'MainController@recruit');
Route::post('/top/recruit/recruit_conform', 'MainController@recruit_conform');
Route::post('/top/recruit/recruit_conform/recruit_create', 'MainController@recruit_create');
Route::get('/top/entry', 'MainController@entry');
Route::get('/top/entry/{id}', 'MainController@detail');
Route::post('/top/entry/{id}/mail', 'MainController@mail');
Route::get('/top/edit', 'MainController@profile');
Route::post('/top/edit/edit_conform', 'MainController@profile_conform');
Route::post('/top/edit/edit_conform/edit_done', 'MainController@profile_done');