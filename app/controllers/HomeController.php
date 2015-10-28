<?php

class HomeController extends BaseController {

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
	public function index(){
		$news = Article::where('cat','xinwen')->limit(7)->orderBy('id','desc')->get();
		$navs = Nav::all();
		return View::make('index')->with('news',$news)->with('navs',$navs);
	}
}
