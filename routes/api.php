<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Router;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

$attributes = [
    'namespace'     => 'Api',
//    'domain'     => 'api.yuang.com',
];
Route::group($attributes,function (Router $router) {

    $router->any('voice', "VoiceController@voiceDistinguish")->name('voice');
    $router->any('formatConversion', "VoiceController@formatConversion")->name('formatConversion');
    $router->any('fileDownload', "VoiceController@fileDownload")->name('fileDownload');
    $router->any('ImageEnlarge', "ImageProcessController@ImageEnlarge")->name('ImageEnlarge');
    $router->any('word', "WordsDistinguishController@wordUpload")->name('word');
    $router->any('webDis', "WordsDistinguishController@webDis")->name('webDis');
    $router->any('createFileName', "WordsDistinguishController@createFileName")->name('createFileName');
    $router->any('download_check', "WordsDistinguishController@download_check")->name('download_check');
    $router->any('word_download', "WordsDistinguishController@word_download")->name('word_download');
});
//Route::get('/voice', function(){
//    dump(32);
//});