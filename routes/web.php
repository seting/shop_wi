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
<<<<<<< HEAD
// 前台首页
Route::resource('/', 'Index\IndexController');
=======

// Route::get('/', function () {
//     return view('Index.Index.index');
// });
>>>>>>> ea916a6f3581eaab674e70ee499c56bb0616e1d4

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
	// 广告管理
	Route::resource('/advertisement','Admin\AdvertisementController');
	// 公告管理
	Route::resource('/notice','Admin\NoticeController');
<<<<<<< HEAD
	// 商品评论管理
	Route::resource('/judge','Admin\JudgeController');
	// 站内信管理
	Route::resource('/letter','Admin\LetterController');


	// 后台友情链接ajax删除
	Route::get('/adminlinkdel','Admin\LinkController@del');
	// 后台友情链接ajax修改状态
	Route::get('/adminlinkdoedit','Admin\LinkController@doedit');
	// 后台轮播图ajax删除
	Route::get('/adminbannerdel','Admin\BannerController@del');
	// 后台轮播图ajax修改状态
	Route::get('/adminbannerdoedit','Admin\BannerController@doedit');
	// 后台广告ajax删除
	Route::get('/adminadvertisementdel','Admin\AdvertisementController@del');
	// 后台广告ajax修改状态
	Route::get('/adminadvertisementdoedit','Admin\AdvertisementController@doedit');
	// 后台评论ajax删除
	Route::get('/judjedel','Admin\JudgeController@del');
	
});

// 前台友情链接管理
Route::resource('/indexlink','Index\LinkController');
// 前台友情链接表单验证
Route::get('/linkphone','Index\LinkController@phone');
// 前台评论管理
Route::resource('/indexjudge','Index\JudgeController');
// 前台站内信管理
Route::resource('/indexletter','Index\LetterController');
// 修改站内信的状态
Route::get('/lettersta','Index\LetterController@status');
// ajax判断账号是否正确
Route::get('/lettersender','Index\LetterController@sender');
=======
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
>>>>>>> ea916a6f3581eaab674e70ee499c56bb0616e1d4
