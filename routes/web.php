<?php
use App\Events\eventTrigger;
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
Route::get('home/{id_guest}', 'HomeController@index');
Route::get('home/{id_guest}/file_download', 'HomeController@file');
Route::get('home/{id_guest}/data_tamu', 'HomeController@tamu');
Route::get('home/{id_guest}/data_tamu/{id_tamu}', 'HomeController@detailTamu');
Route::get('home/{id_guest}/profile', 'HomeController@profile');
Route::get('home/{id_guest}/profile/edit', 'HomeController@editprofile');
Route::post('home/{id_guest}/profile/update', 'HomeController@updateprofile')->name('updatedata');
Route::get('home/{id_guest}/chat', 'HomeController@chat');
Route::get('home/{id_guest}/chatbox', 'HomeController@chatbox');
Route::post('home/{id_guest}/chat/msg', 'ChatController@msg')->name('msg');
Route::get('updatedata/{qr_kode}', 'HomeController@updatedata');
Route::post('updatedata/{qr_kode}', 'HomeController@storeupdatedata')->name('storeupdate');

//Route For AJax
Route::get('/chat/{id_guest}', 'HomeController@chatajax');
Route::get('/fireEvent/notif', function(){
    event(new eventTrigger());
});