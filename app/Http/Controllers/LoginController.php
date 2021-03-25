<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function main()
    {
        return view("login.login");
    }

    public function reg()
    {
        return view("login.reg");
    }

    // 验证码图片
    public function captcha()
    {
        $captcha = new \Captcha();
        $_SESSION['captcha'] = $captcha->getCode();
        $captcha->render();
    }

    public function login(Request $request)
    {
        var_dump(123123123);
        return;
        $captcha = new \Captcha();
        $msg = [];
        if (!$captcha->check($request->get("captcha"))) {
            $msg['captcha'] = "验证码错误！";
            return view("login.login",$msg);
        }
        var_dump($request->get("username"));
        return;
        $m = User::where("username",$request->get('username'))->where('password', md5($request->get("password")))->first();


        $_SESSION['user_id'] = 1;
        $_SESSION['username'] = 'zakokun';
        return redirect("/");
    }


    // 用户注册
    public function regUser(Request $request)
    {
        $this->validate($request, [
            'captcha' => 'required|captcha'
        ]);

    }

    public function out()
    {
        session_destroy();
        return redirect("/");
    }
}
