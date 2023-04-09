<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }
    public function samples(){
        return view('samples');
    }
    public function plugin(){
        return view('plugin');
    }
    public function song(){
        return view('song');
    }
    public function contact(){
        return view('contact');
    }
    public function account(){
        return view('account');
    }
    public function cart(){
        return view('cart');
    }
}
