<?php

class PublicController extends BaseController {

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
	public function index($cats){
		$cat = Nav::where('short',$cats)->first();
		$nav = Nav::all();
		$article = Article::where('cat',$cats)->paginate(10);
		$upart = Article::limit(7)->orderBy('id','desc')->get();
		return View::make('xinwen')->
		with('article',$article)->
		with('cat',$cat['cat'])->
		with('navs',$nav)->
		with('curr',$cat['short'])->
		with('upart',$upart);
	}
	public function view($cats,$id){
		$article = Article::find($id);
		$cat = Nav::where('short',$cats)->first();
		$nav = Nav::all();
		$upart = Article::limit(7)->orderBy('id','desc')->get();
		return View::make('ziye')->
		with('article',$article)->
		with('cat',$cat['cat'])->
		with('navs',$nav)->
		with('curr',$cat['short'])->
		with('upart',$upart);
	}
}