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

Route::get('/', 'HomeController@index')->name('index');
Route::get('/home', 'HomeController@index')->name('index');
Route::get('/receive', 'RedeemController@receive')->name('receive');
Route::get('/sent', 'RedeemController@sent')->name('sent');
Route::post('/redeem', 'RedeemController@redeem')->name('redeem');
Route::post('/receive', 'RedeemController@redeemReceive')->name('redeemReceive');
