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

// Routes pour les PLACES
Route::get('/places', 'PlaceController@index')->name('place.index');
Route::get('/places/new', 'PlaceController@new')->name('place.new');
Route::get('/places', 'PlaceController@store')->name('place.store');
Route::get('/places/{placeId}', 'PlaceController@show')->name('place.show');
Route::get('/places/{placeId}/edit', 'PlaceController@edit')->name('place.edit');
Route::get('/places/{placeId}', 'PlaceController@update')->name('place.update');
Route::get('/places/{placeId}', 'PlaceController@destroy')->name('place.destroy');

