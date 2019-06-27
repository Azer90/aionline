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

Route::get('/', 'IndexController@index')->name('/');
Route::get('imageHandle', 'ImageHandleController@index')->name('imageHandle');//图像AI处理
Route::get('service', 'ServiceController@index')->name('service');//服务定制
Route::get('textDiscern', 'TextDiscernController@index')->name('textDiscern');//文字在线识别
Route::get('tutorials', 'TutorialsController@index')->name('tutorials');//使用教程
Route::get('voiceCompose', 'VoiceComposeController@index')->name('voiceCompose');//在线语音合成
Route::get('voiceToText', 'VoiceToTextController@index')->name('voiceToText');//语音转文字

Route::get('tutorials/{id}', 'TutorialsController@detail')->where('id', '[0-9]+')->name('detail');
