<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function info(Request $request)
    {
        $user = User::where('user_id', $_SESSION['user_id'])->first();
        return view("user.info", ["user" => $user]);
    }

    public function changePassword(Request $request)
    {
        $oldPwd = $request->get("oldPassword");
        $newPwd = $request->get("newPassword");
        $reNew = $request->get("rePassword");
        $user = User::where('user_id', $_SESSION['user_id'])->first();
        if ($user->password != md5($oldPwd)) {
            return $this->json(301, "原密码错误！");
        }
        if ($newPwd != $reNew) {
            return $this->json(301, "两次输入密码不一致！");
        }
        $user->password = md5($newPwd);
        $user->save();
        return $this->json(200, "修改密码成功！");
    }

    public function bindAppKey(Request $request)
    {
        $key = $request->get("key");
        $secret = $request->get("secret");
        $user = User::where('user_id', $_SESSION['user_id'])->first();
        $user->app_key = $key;
        $user->secret = $secret;
        $user->save();
        return $this->json(200, "交易所 appkey 绑定成功！");
    }
}
