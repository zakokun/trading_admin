<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Stock;
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
        $stocks = Stock::find();
        return view("order.add", ['user' => $user, "stocks" => $stocks]);
    }

    public function add(Request $request)
    {
        $symbol = $request->post("symbol");
        $act = $request->post("act");
        $price = $request->post("price");
        $num = $request->post("num");

        $m = new Order();
        $m->symbol = $symbol;
        $m->act = $act;
        $m->price = $price;
        $m->num = $num;

        $m->save();
        return $this->json(200, "下单成功！");
    }
}
