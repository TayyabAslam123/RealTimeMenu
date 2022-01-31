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


//Route::get('/send-notification',"FcmController@pushNotification");
//testing	
Route::get('/fcm',"FcmController@index");
Route::get('/send-notification',"FcmController@sendNotification");
Route::post('/set-session',"FcmController@setSession")->name('set');
