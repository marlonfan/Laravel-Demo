<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/','HomeController@index');
// 留言路由
Route::get('liuyan',function(){return '留言暂未开放!<a href='.URL::to('/').'>返回首页';});
// asme路由
Route::get('cat/asme','AsmeController@index');
// 子页路由
Route::get('ziye',function(){return '非法访问';});
// 公共路由
Route::get('cat/{cats}','PublicController@index');
Route::get('view/{cats}/{id}','PublicController@view')->where('cats','[a-z]+')->where('id','[0-9]+');
// admin
Route::get('login',function(){return View::make('admin.login');});
Route::post('login/islogin','AdminController@isLogin');
Route::get('out',function(){Session::forget('name');return Redirect::to('/');});
Route::get('admin','AdminController@index');
Route::get('admin/edit/{id}',array('before'=>'admin','uses'=>'AdminController@edit'))->where('id','[0-9]+');
Route::post('admin/update/{id}',array('before'=>'admin','uses'=>'AdminController@update'))->where('id','[0-9]+');
Route::get('admin/del/{id}',array('before'=>'admin','uses'=>'AdminController@del'))->where('id','[0-9]+');
Route::get('admin/add',array('before'=>'admin','uses'=>'AdminController@add'));
Route::post('admin/addsubmit',array('before'=>'admin','uses'=>'AdminController@addsubmit'));
// 后台过滤器
Route::filter('admin', function(){if(!Session::get('name'))exit('请先登录');});