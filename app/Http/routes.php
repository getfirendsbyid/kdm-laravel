<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});





Route::any('/wechat', 'WechatController@serve');

/**
 *  微信后台登录
 */



Route::group(['namespace'=>'admin','middleware' => 'admin','prefix'=>'admin'], function () {

    Route::get('logout','loginController@logout');  //登出

    Route::resource('login','loginController');  //登陆 模块

    Route::resource('index','indexController');  //微信后台中心

    Route::resource('login','loginController');



});




/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {



});




