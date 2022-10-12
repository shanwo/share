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
//微信公众号验证
Route::get('MP_verify_wOQevRdcPyMeqMJL.txt', function () {
    return 'wOQevRdcPyMeqMJL';
});
Route::prefix('base')->group(function () {
//文件上传
    Route::post('upload', 'UploadController@file');
//地区信息
    Route::get('area', 'AreaController@lists');
});
//用户
Route::prefix('user')->group(function () {
    Route::get('signIn', 'UserController@signIn');
    Route::get('signOut', 'UserController@signOut');
    Route::get('info', 'UserController@info');
    Route::post('edit', 'UserController@edit');
});
//公众号
Route::prefix('official')->group(function () {
    Route::get('server', 'OfficialController@bind');
    Route::post('server', 'OfficialController@server');
});

