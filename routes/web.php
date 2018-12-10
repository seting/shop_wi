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

// 后台控制器
Route::group([],function(){
	// 后台首页
	Route::get('/admin','Admin\AdminController@index');
	// 后台管理员权限
	Route::resource('/admins','Admin\AdminsController');
	// 会员管理
	Route::resource('/user','Admin\UserController');
	// 分类管理
	Route::resource('/cate','Admin\CateController');
	// 商品管理
	Route::resource('/goods','Admin\GoodsController');
	// 订单管理
	Route::resource('/order','Admin\OrderController');
	// 轮播图管理
	Route::resource('/banner',"Admin\BannerController");
	// 友情连接管理
	Route::resource('/link','Admin\LinkController');
	// 公告管理
	Route::resource('/notice','Admin\NoticeController');
});