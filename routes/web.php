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

//-------------------------------- status_entity --------------------//
Route::get('/status', 'StatusController@index')->name('status.index');
Route::get('/status/new', 'StatusController@create')->name('status.create');
Route::post('/status', 'StatusController@store')->name('status.store');
Route::get('/status/{status}', 'StatusController@show')->name('status.show');
Route::get('/status/{status}/edit', 'StatusController@edit')->name('status.edit');
Route::put('/status/{status}', 'StatusController@update')->name('status.update');
Route::delete('/status/{status}', 'StatusController@destroy')->name('status.destroy');

//-------------------------------- schedules_entity --------------------//
Route::get('/schedules', 'ScheduleController@index')->name('schedules.index');
Route::get('/schedules/new', 'ScheduleController@create')->name('schedules.create');
Route::post('/schedules', 'ScheduleController@store')->name('schedules.store');
Route::get('/schedules/{schedule}', 'ScheduleController@show')->name('schedules.show');
Route::get('/schedules/{schedule}/edit', 'ScheduleController@edit')->name('schedules.edit');
Route::put('/schedules/{schedule}', 'ScheduleController@update')->name('schedules.update');
Route::delete('/schedules/{schedule}', 'ScheduleController@destroy')->name('schedules.destroy');

//-------------------------------- checks_entity --------------------//
Route::get('/checks', 'CheckController@index')->name('schedules.index');
Route::get('/checks/new', 'CheckController@create')->name('checks.create');
Route::post('/checks', 'CheckController@store')->name('checks.store');
Route::get('/checks/{check}', 'CheckController@show')->name('checks.show');
Route::get('/checks/{check}/edit', 'CheckController@edit')->name('checks.edit');
Route::put('/checks/{check}', 'CheckController@update')->name('checks.update');
Route::delete('/checks/{check}', 'CheckController@destroy')->name('checks.destroy');
