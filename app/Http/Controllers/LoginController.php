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

    public function login(Request $request)
    {
        var_dump($_SESSION);
        return;
        $m = User::where("username", $request->get('username'))->where('password', md5($request->get("password")))->first();
        if ($m == null) {
            return view("/login.login", ["msg" => "用户名或密码错误！"]);
        }
        $_SESSION['user_id'] = $m->id;
        $_SESSION['username'] = $m->username;
        return redirect("/");
    }


    // 用户注册
    public function regUser(Request $request)
    {
        $u = $request->get("username");
        $p = $request->get("password");
        $rp = $request->get("repassword");
        if (strlen($u) < 4 || strlen($p) < 4 || strlen($rp) < 4) {
            return view("/login/reg", ["msg" => "账号或密码少于4位！"]);
        }
        if ($p != $rp) {
            return view("/login/reg", ["msg" => "两次密码不一致！"]);
        }
        $user = User::where("username", $u)->first();
        if ($user != null) {
            return view("/login/reg", ["msg" => "用户名已存在！"]);
        }
        $user = new User();
        $user->username = $u;
        $user->password = md5($p);
        $user->last_login_time = date("Y-m-d H:i:s");
        $user = $user->save();
        $new = User::where("username", $u)->first();
        $_SESSION['user_id'] = $new->id;
        $_SESSION['username'] = $u;
        return redirect("/");
    }

    public function out()
    {
        session_destroy();
        return redirect("/");
    }
}
