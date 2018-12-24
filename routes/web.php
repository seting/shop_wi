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

// Route::get('/', function () {
//     return view('Index.Index.index');
// });

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
	//分类管理ajax修改状态display
	Route::get('/cateedit','Admin\CateController@cateedit');
	// 商品管理
	Route::resource('/goods','Admin\GoodsController');
	//商品管理ajax修改状态static
	Route::get('/goodsedit','Admin\GoodsController@goodsedit');
	//商品管理ajax修改状态recom
	Route::get('/goodsedits','Admin\GoodsController@goodsedits');
	//商品管理ajax删除
	Route::get('/goodsdel','Admin\GoodsController@goodsdel');
	//商品规格添加
	Route::get('/sizeadd/{id}','Admin\GoodsController@sizeadd');
	Route::post('/sizedoadd','Admin\GoodsController@sizedoadd');
	//商品规格删除
	Route::get('/sizedel','Admin\GoodsController@sizedel');
	//商品规格修改
	Route::get('/sizeedit/{id}','Admin\GoodsController@sizeedit');
	//商品规格执行修改
	Route::post('/sizedoedit','Admin\GoodsController@sizedoedit');
	// 收藏管理
	Route::resource('/collect','Admin\CollectController');
	//品牌管理
	Route::resource('/brand','Admin\GoodbrandController');
	// 订单管理
	Route::resource('/order','Admin\OrderController');
	// 轮播图管理
	Route::resource('/banner',"Admin\BannerController");
	// 友情连接管理
	Route::resource('/link','Admin\LinkController');
	// 公告管理
	Route::resource('/notice','Admin\NoticeController');
});

//前台控制器
Route::group([],function(){
	//前台首页
	Route::resource('/','Index\IndexController');
	//商品详情
	Route::resource('/detail','Index\DetailController');
	//ajax查询数据
	Route::get('/getdetail','Index\DetailController@getDetail');
	//商品列表
	Route::resource('/list','Index\ListController');
	//排序
	Route::get('/getfunc/{typeid}-{order}','Index\ListController@getfunc');
	//收藏列表
	Route::resource('/collect','Index\CollectController');
});