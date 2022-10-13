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
Route::prefix('base')->group(function () {
//文件上传
    Route::post('upload', 'UploadController@file');
//地区信息
    Route::get('area', 'AreaController@lists');
});
//用户
Route::prefix('user')->group(function () {
    Route::get('applets', 'UserController@applets');
    Route::get('signIn', 'UserController@signIn');
    Route::get('signOut', 'UserController@signOut');
    Route::get('info', 'UserController@info');
    Route::post('edit', 'UserController@edit');
    Route::get('official', 'UserController@official');
    Route::get('wechat', 'UserController@wechat');
});

