<?php

namespace App\Http\Controllers\Site;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class MemberController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:members')->only('show');
    }

    public function index(){
        $guard = Auth::guard('members');
        if($guard->check()){
            return "已经登录";
        }else{
            return "未登录";
        }
    }

    public function show(Member $member){
        return __METHOD__;
    }

    public function login(){

        $credentials = ['login_account'=>'cyberpunk','login_password'=>'123456'];
        $remember = false;
        //$password = bcrypt('123456');
        $guard=Auth::guard('members');
        $loginResult = $guard->attempt($credentials,$remember);
        return 1;

    }

    public function logout(){
        $guard=Auth::guard('members');
        $logout_result = $guard->logout();
        return 1;
    }



}
