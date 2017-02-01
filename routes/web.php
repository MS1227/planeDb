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

Route::group(['middleware' => ['web']], function(){
    Route::get('/', 'PagesController@home');
    Route::resource('flights', 'FlightsController');
    Route::resource('airports', 'AirportController');
    Route::get('/flights/{flight}/edit','FlightsController@edit');
    Route::post('/flights/{flight}', 'FlightsController@update');
    Route::post('/flights/{flight}', 'FlightsController@destroy');
    Route::post('/airports/{airport}', 'AirportsController@update');
});

