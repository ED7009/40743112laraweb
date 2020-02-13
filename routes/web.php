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
    return view('index');
});
Route::get('/guest','mainController@guest_view');
Route::get('/kitchan','mainController@kitchan_view');
Route::get('/modify','mainController@_modify');
Route::post('/modify/{snumber}','mainController@modify_order');
Route::post('/out/{snumber}','mainController@_out');
Route::post('/submit','mainController@submit');
