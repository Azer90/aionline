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
    $router->any('word', "WordsDistinguishController@word")->name('word');

});
//Route::get('/voice', function(){
//    dump(32);
//});