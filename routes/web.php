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

Route::redirect('/', 'https://shanwo.cc');
//用户
Route::prefix('user')->group(function () {
    Route::post('applets', 'UserController@applets');
    Route::get('signIn', 'UserController@signIn');
    Route::get('signOut', 'UserController@signOut');
    Route::get('info', 'UserController@info');
    Route::post('edit', 'UserController@edit');
    Route::get('official', 'UserController@official');
    Route::get('wechat', 'UserController@wechat');
});

