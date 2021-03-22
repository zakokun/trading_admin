<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Models\UserStockStars;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isEmpty;

class StockController extends Controller
{
    public function list()
    {
        $ls = Stock::all();
        return view("stock.list", ["ls" => $ls]);
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
