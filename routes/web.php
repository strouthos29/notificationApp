<?php

use Illuminate\Support\Facades\Route;

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
    return view('main');
});

Route::get('/notifications', 'App\Http\Controllers\NotificationsController@index')->name('notification.index');

Route::get('/create', 'App\Http\Controllers\NotificationsController@create')->name('create.notification');

Route::post('/store', 'App\Http\Controllers\NotificationsController@Store')->name('notification.store');

Route::get('edit/notification/{id}', 'App\Http\Controllers\NotificationsController@edit');

Route::post('update/notification/{id}', 'App\Http\Controllers\NotificationsController@update');

Route::get('delete/notification/{id}', 'App\Http\Controllers\NotificationsController@delete');
