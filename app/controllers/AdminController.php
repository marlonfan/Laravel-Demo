<?php

class AdminController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

/*	public function __constract(){

	}*/
	public function isLogin(){
		$user = Input::all();
		$admin = Users::where('username',$user['user'])->first();
		if($user['password'] == $admin['password']){
			Session::put('name',$admin['cnname']);
			return Redirect::to('admin');
		}else{
			return '用户名或密码错误请<a href='.URL::to('login').'>重新登录</a>';
		}
	}
	public function index(){
		$session = Session::get('name');
		if(!$session)exit('您还未登录请先<a href='.URL::to('login').'>登录</a>');
		$art = Article::orderBy('id','desc')->paginate(10);
		return View::make('admin.admin')->with('art',$art);
	}
	public function edit($id){
		$art = Article::find($id);
		return View::make('admin.adminedit')->with('a',$art);
	}
	public function update($id){
		$update = Input::all();
		$up['title'] = $update['title'];
		switch ($update['cat']) {
			case 'suibi':
				$up['cat'] = '随笔';
				break;
			case 'ziyuan':
				$up['cat'] = '资源';
				break;
			case 'code':
				$up['cat'] = 'code';
				break;
			case 'xinwen':
				$up['cat'] = '新闻';
				break;
			case 'jishu':
				$up['cat'] = '技术';
				break;
		}
		$up['content'] = $update['editorValue'];
		Article::where('id',$id)->update($up);
		return Redirect::to('admin');
	}
	public function del($id){
		Article::where('id',$id)->delete();
		return '删除成功<a href='.URL::to('admin').'>返回文章管理</a>';
	}
	public function add(){
		return View::make('admin.adminadd');
	}
	public function addsubmit(){
		$input = Input::all();
		if($input['title']){
			$art = new Article;
			switch ($input['cat']) {
			case 'suibi':
				$art['cat'] = '随笔';
				break;
			case 'ziyuan':
				$art['cat'] = '资源';
				break;
			case 'code':
				$atr['cat'] = 'code';
				break;
			case 'xinwen':
				$art['cat'] = '新闻';
				break;
			case 'jishu':
				$art['cat'] = '技术';
				break;
			}
			$art->title = $input['title'];
			$art->content = $input['editorValue'];
			$art->user = Session::get('name');
			$art->create_time = time();
			$art->save();
			return '添加成功~<a href='.URL::to('admin/add').'>继续添加</a>||<a href='.URL::to('admin').'>查看列表</a>';
		}else{
			return '插入失败';
		}
	}
}