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
    return view('home');
});

Route::get('/providers', 'ProviderController@getAll')
->name('providers');


Route::get('/provider/{id}', 'ProviderController@getOne')
->where('id', '[0-9]{1,4}')
->name('provider');
