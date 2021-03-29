<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Models\UserStockStars;
use Dotenv\Store\StoreInterface;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function list(Request $request)
    {
        $m = new Stock();
        $all = $request->all();
        if (isset($all["keyword"])) {
            $m = $m->where("symbol", "like", "%" . $all['keyword'] . "%");
        }
        $ls = $m->paginate(2);
        return view("stock.list", ["ls" => $ls, "all" => $all]);
    }

    public function myStar(Request $request)
    {
        $uid = $_SESSION['user_id'];
        $all = $request->all();
        $m = UserStockStars::where('user_id', $uid)->order('ctime', 'desc');
        $ls = $m->paginate(2);
        return view("stock.my", ["ls" => $ls, "all" => $all]);
    }

    // 基础信息和折线图
    function info(Request $request)
    {
        $sid = $request->get("symbol");
        $s = $request->get("start");
        $e = $request->get('end');


    }

    public function star(Request $request)
    {
        $symbol = $request->get("symbol");
        if ($symbol == "") {
            return $this->json(404, "该货币不存在");
        }
        $f = UserStockStars::where('user_id', $_SESSION['user_id'])->where("symbol", $symbol)->first();
        $msg = '关注成功';
        if ($f == null) { // 添加关注
            $f = new UserStockStars();
            $f->symbol = $symbol;
            $f->user_id = $_SESSION['user_id'];
            $f->star_price = Stock::where("symbol", $symbol)->first()->open;
            $f->save();
        } else { //  取消关注
            $f->delete();
            $msg = '取消关注成功';
        }
        $f->save();
        return $this->json(200, $msg);
    }
}
