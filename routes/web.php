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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/users', 'UserController@index');
Route::get('/home/create/user', 'UserController@create');
Route::post('/home/create/user', 'UserController@store');
Route::get('/home/user/{id}', 'UserController@show');
Route::get('/home/edit/user/{id}','UserController@edit');
Route::post('/home/edit/user/{id}','UserController@update');