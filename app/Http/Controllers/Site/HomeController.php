<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function index(){
        return view("site.index");
    }

    public function formtest(){
        return view('site.formtest');
    }

    public function formtest_store(){
        return "ok";
    }
}
