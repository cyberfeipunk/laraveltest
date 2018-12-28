<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use TestLib;
use App\Lib\TestLib as TestLib1;
class HomeController extends Controller
{
    //
    public function __construct(Testlib1 $lib){
        $this->lib = $lib;
        $this->middleware('checkage')->only('formtest_store');
    }
    public function index(){
        return view("site.index");
    }

    public function formtest(){
        return view('site.formtest');
    }

    public function formtest_store(){
        return "ok";
    }

    public function facadertest(){
        //app()->singleton('testlib',function(){
        //    return  new TestLib();
        //});
        //$testLib = app()->make('testlib');
        //return $testLib->run();
        echo __FUNCTION__;
        return TestLib::run();
    }

    public function facadertest2(){
        return $this->lib->run();
    }


}
