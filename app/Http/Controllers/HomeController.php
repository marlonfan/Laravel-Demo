<?php
/**
 * Created by PhpStorm.
 * User: marlon
 * Date: 15/11/11
 * Time: 下午2:07
 */

namespace App\Http\Controllers;


class HomeController extends Controller{
    public function home() {
        return view('index');
    }

    public function about() {
        return view('about');
    }
}