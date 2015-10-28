<?php

class AsmeController extends BaseController {

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
		$navs = Nav::all();
		$cat = 'asme';
		$upart = Article::limit(7)->orderBy('id','desc')->get();
		return View::make('asme')->with('navs',$navs)->with('cat',$cat)->with('upart',$upart);
	}
}
