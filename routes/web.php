<?php

use Illuminate\Support\Facades\Route;
use App\Events\TaskFlowEvent;
use App\Events\OrderShipped;
use App\User;

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

//Route::get('/', function () {
    //return view('welcome');
//})->name('login');

Route::any('wechat/main', 'WechatController@main');
Route::get('wxpay/product', 'WxpayController@product');
Route::get('wxpay/notify', 'WxpayController@notify');
Route::post('wxpay/notify', 'WxpayController@notify');
Route::post('wxpay/prepay', 'WxpayController@prepay');

Route::get('flush', 'WechatController@ilovethisgame');
Route::get('phpinfo', 'WechatController@phpinfo');
Route::get('/', 'WechatController@phpinfo');

Route::get('mongo/lists', 'MongoController@index');
Route::get('mongo/model', 'MongoController@model');

//broadcast 触发广播，并没有发通知
//Route::get('broadcast', function(){
    //broadcast(new TaskFlowEvent());
    //event( new TaskFlowEvent());
//});

Route::get('broadcast', function(){
    event( new OrderShipped());
});
