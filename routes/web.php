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
Auth::routes();
Route::get('/', function () {
    return redirect('login');
});

Route::group(['prefix' => 'portal'], function() {
    Route::get('dashboard','Portal@index');
    Route::any('user','User@index');
});

Route::get('Welcome','Welcome@index');