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
    return 'home';
});

Route::get('login','LoginController@index');
Route::post('login/authenticate','LoginController@authenticate');

Route::get('register','RegisterController@index');
Route::post('register/insert','RegisterController@insert');

Route::get('blade', function () {
    return view('welcome');
});
