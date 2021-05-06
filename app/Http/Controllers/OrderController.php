<?php

namespace App\Http\Controllers;

use App\Models\Order;
use \App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function list(Request $request)
    {
        $m = new Order();
        $all = $request->all();
        if (isset($all["keyword"])) {
            $m = $m->where("symbol", "like", "%" . $all['keyword'] . "%");
        }
        $ls = $m->where("user_id", $_SESSION['user_id'])->orderBy('ctime', 'desc')->paginate(2);
        return view("order.list", ["ls" => $ls, "all" => $all]);
    }

    public function showAdd(Request $request)
    {
        $user = User::where("id", $_SESSION['user_id'])->first();
        if (is_null($user) || $user->app_key == "") {
            return $this->json(300, "还未绑定appkey，请先去绑定");
        }
        return view("order.add",['user'=>$user]);

    }
}
