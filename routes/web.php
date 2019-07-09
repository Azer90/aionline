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
use Illuminate\Routing\Router;
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

Route::get('search/{tag}', 'TutorialsController@search')->name('search'); //全文搜索


Route::group( ['prefix'=> 'wechat'], function (Router $router) {
    $router->any('/', 'WeChatController@serve');
    $router->any('/menu', 'WeChatController@menu');
    $router->any('/qrcode', 'WeChatController@qrcode');

});

Route::any('Api_getVoice', 'VoiceComposeController@Api_getVoice')->name('Api_getVoice');

Route::get("auto_delete","AutoController@auto_delete")->name("auto_delete");

Route::post('pay', 'BuyController@pay')->name('pay'); //支付

Route::post('wechat_find', 'BuyController@wechat_find')->name('wechat_find');
Route::post('ali_find', 'BuyController@ali_find')->name('ali_find');