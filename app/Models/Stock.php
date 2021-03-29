<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends baseModel
{
    use HasFactory;

    // 查看用户是否关注了股票
    public function hasStar(): bool
    {
        $star = UserStockStars::where("user_id", $_SESSION['user_id'])->where("symbol", $this->symbol)->first();
        if ($star == null) {
            return false;
        } else {
            return true;
        }
    }

    public function stock(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo("App\Models\Stock", 'symbol', 'symbol');
    }

    public function rateFromStar(): float
    {
        return ($this->star_price - $this->stock->close) / $this->stock->close;
    }
}
