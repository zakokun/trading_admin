<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Models\UserStockStars;
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

    function info(Request $request)
    {
        $sid = $request->get("stock_id");

    }

    public function star(Request $request)
    {
        $symbol = $request->get("symbol");
        if ($symbol == "") {
            return $this->json(404, "该货币不存在");
        }
        $f = new UserStockStars();
        $f->symbol = $symbol;
        $f->user_id = 123;
        $f->save();
        return $this->json(200, "关注成功");
    }
}
