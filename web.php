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


Route::get('/swagger/my-data','SwaggerController@getMyData');

Route::get('/oauth','Admin\LoginController@oauth');

Route::get('excel/export','ExcelController@export');
Route::get('excel/import','ExcelController@import');


# 发送邮件
Route::get('mail/send','MailController@send');
Route::get('mail/pin_yin','MailController@pinYin');