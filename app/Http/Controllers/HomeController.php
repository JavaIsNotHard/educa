<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {
    public function index() {
        return view('index');
    }
    public function index2() {
        return view('index-2');
    }
    public function index3() {
        return view('index-3');
    }
}
