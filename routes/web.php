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
Route::get('/{id_guest}', 'HomeController@index');
Route::get('/{id_guest}/file_download', 'HomeController@file');
Route::get('/{id_guest}/data_tamu', 'HomeController@tamu');
Route::get('/{id_guest}/data_tamu/{id_tamu}', 'HomeController@detailTamu');
Route::get('/{id_guest}/profile', 'HomeController@profile');
Route::get('/{id_guest}/profile/edit', 'HomeController@editprofile');
Route::post('/{id_guest}/profile/update', 'HomeController@updateprofile')->name('updatedata');