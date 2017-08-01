<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//首页
Route::get('/', function () {
    return view('index');
});
// guest中间件如果已认证跳转到首页,auth中间件如果已认证跳转到路由所对应的的页面
Route::group(['middleware' => 'guest'], function () {
    //认证路由
    Route::get('auth/login', 'Auth\AuthController@getLogin');
    Route::post('auth/login', 'Auth\AuthController@postLogin');
    // 注册路由
    Route::get('auth/register', 'Auth\AuthController@getRegister');
    Route::post('auth/register', 'Auth\AuthController@postRegister');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('api/apply/{id}', 'ApiController@apply');
    Route::get('console/index', 'ConsoleController@index');
    Route::get('console/api', 'ConsoleController@api');
    Route::get('console/user', 'ConsoleController@edit');
    Route::post('console/user', 'ConsoleController@update');
    Route::get('console/password', 'ConsoleController@showPass');
    Route::post('console/password', 'ConsoleController@password');
    Route::get('console/apikey', 'ConsoleController@apikey');
    Route::post('console/apikey', 'ConsoleController@updateKey');
});
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// 发送密码重置链接路由
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// 密码重置路由
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

//验证码
Route::get('captcha/default', 'Auth\AuthController@getCaptcha');

//业务
Route::get('api/index/{id?}', 'ApiController@index');
Route::get('api/show/{id}', 'ApiController@show');


//底部html
Route::get('law',function(){return view('footer.law');});

