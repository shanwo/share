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
//地区信息
    Route::get('area', 'AreaController@lists');
//文件上传
    Route::post('upload', 'UploadController@file');
//用户反馈
    Route::post('feedback', 'FeedbackController@add');
//公众号绑定
    Route::get('official', 'OfficialController@bind');
//公众号消息
    Route::post('official', 'OfficialController@server');
});
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
//支付
Route::prefix('pay')->group(function () {
    Route::get('lists', 'PayController@lists');
    Route::post('send', 'PayController@send');
    Route::post('result', 'PayController@result');
    Route::post('payment', 'PayController@payment');
    Route::post('refund', 'PayController@refund');
});

