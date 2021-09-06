<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
    //return $request->user();
//});

Route::group(['namespace' => 'API', 'middleware'=>['cors']], function () {
    Route::post('auth/login', 'AuthController@login');
});

Route::group(['namespace' => 'API', 'middleware'=>['cors', 'api']], function () {
    Route::get('auth/logout', 'AuthController@logout');
    Route::get('auth/refresh', 'AuthController@refresh');
});

// Optional: Disable authentication in development
//Route::group(['middleware' => ['api', 'cors']], function () {
Route::group(['middleware' => ['api', 'permission', 'cors']], function () {
    //用户
    Route::get('admins', 'AdminController@index'); //用户列表页
    Route::post('admins/store', 'AdminController@store'); //创建用户保存
    Route::get('admins/{user}/role', 'AdminController@role');  //用户角色页   路由模型绑定
    Route::post('admins/{user}/role', 'AdminController@storeRole'); //保存用户角色页   路由模型绑定
    Route::post('admins/delete', 'AdminController@delete');
    Route::post('admins/batchdelete', 'AdminController@batchdelete');
    Route::post('admins/chgpwd', 'AdminController@chgpwd');
    Route::post('admins/resetpwd', 'AdminController@resetpwd');
    Route::get('admins/{user}/tag', 'AdminController@tag');  //用户tag页   路由模型绑定
    Route::post('admins/{user}/tag', 'AdminController@storeTag');
    Route::post('admins/bind-member', 'AdminController@bindMember');

    //角色
    Route::get('roles', 'RoleController@index');   //列表展示页面
    Route::post('roles/store', 'RoleController@store'); //创建提交页面
    Route::get('roles/{role}/permission', 'RoleController@permission'); //角色权限页面  路由模型绑定
    Route::post('roles/{role}/permission', 'RoleController@storePermission'); //角色权限提交页面  路由模型绑定
    Route::post('roles/delete', 'RoleController@delete');
    Route::get('roles/lists', 'RoleController@lists');

    //权限
    Route::get('permissions', 'PermissionController@index');
    Route::get('permissions/all', 'PermissionController@all');
    Route::post('permissions/insert', 'PermissionController@insert');
    Route::post('permissions/update', 'PermissionController@update');
    Route::post('permissions/delete', 'PermissionController@delete');
    Route::get('permissions/children', 'PermissionController@children');

    //小程序
    Route::get('mini/wxlogin', 'MiniController@wxlogin');

    //微信
    Route::prefix('wechat')->group(function () {
        //微信推送
        Route::get('pictxtlist', 'WechatController@picTxtList');
        Route::get('pictxtlistall', 'WechatController@picTxtListAll');
        Route::post('storepictxt', 'WechatController@storePicTxt');
        Route::post('deletepictxt', 'WechatController@deletePicTxt');
        Route::post('upload', 'WechatController@upload');

        Route::post('storematerial', 'WechatController@storeMaterial');
        Route::get('pictxt/{pictxt}/materials', 'WechatController@picTxtMaterialList');
        Route::get('material/{material}/members', 'WechatController@materialMember');
        Route::post('storememberpictxt', 'WechatController@storeMemberPicTxt');
        Route::post('storeautoreply', 'WechatController@storeAutoReply');
        Route::post('deleteautoreply', 'WechatController@deleteAutoReply');
        Route::get('autoreply', 'WechatController@autoReply');

        Route::post('storekeyword', 'WechatController@storeKeyword');
        Route::get('keywords', 'WechatController@keywords');
        Route::get('keylists', 'WechatController@keylists');
        Route::post('deletematerial', 'WechatController@deleteMaterial');
        Route::get('material/{material}', 'WechatController@materialDetail');
        Route::get('pictxtqueue', 'WechatController@picTxtQueue');
        Route::post('deletepictxtqueue', 'WechatController@deletepictxtqueue');
        Route::post('pictxtqueue/batchdelete', 'WechatController@batchDeletePicTxtQueue');

        //微信菜单
        Route::get('menus', 'WechatController@menus');
        Route::post('insertmenu', 'WechatController@insertmenu');
        Route::post('updatemenu', 'WechatController@updatemenu');
        Route::post('deletemenu', 'WechatController@deletemenu');
        Route::get('menuchildren', 'WechatController@menuchildren');
        Route::get('publishmenu', 'WechatController@publishmenu');
        Route::get('qrcode', 'WechatController@qrcode');
    });
});


Route::prefix('screen')->group(function () {
    Route::get('industries', 'API\ScreenController@industries');
    Route::get('goods', 'API\ScreenController@goods');
    Route::get('orders', 'API\ScreenController@orders');
    Route::get('shops', 'API\ScreenController@shops');
    Route::get('total-statistics', 'API\ScreenController@totalStatistics');
    Route::get('shop-entry-statistic', 'API\ScreenController@shopEntryStatistic');
    Route::get('latest-order', 'API\ScreenController@latestOrder');
    Route::get('order-area-statistic', 'API\ScreenController@orderAreaStatistic');
    Route::get('shop-sale-ranking', 'API\ScreenController@shopSaleRanking');
    Route::get('industry-area-statistic', 'API\ScreenController@industryAreaStatistic');
});
