<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserStockStars extends baseModel
{
    use HasFactory;

    public function myStock()
    {
        return Stock::where('symbol', $this->symbol)->first();
    }

    public function rateFromStar(): float
    {
        return sprintf("%.4f", ($this->star_price - $this->myStock()->close) / $this->myStock()->close);
    }
}
