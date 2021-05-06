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

    public function put(Request $request)
    {
        $user = User::find($_SESSION['user_id']);
        if (is_null($user) || $user->appkey == "") {
            return $this->json(300, "还未绑定appkey，请先去绑定");
        }
    }
}
