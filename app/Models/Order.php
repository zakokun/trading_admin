<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends baseModel
{
    use HasFactory;

    // 查看用户是否关注了股票
    public function actName(): string
    {
        if ($this->act == 1) {
            return "买入";
        } else {
            return "卖出";
        }
    }

    public function stateName(): string
    {
        $name = "未知状态";
        switch ($this->state) {
            case 0:
                $name = "未处理";
                break;
            case 1:
                $name = "已下单";
                break;
            case 2:
                $name = "已成交";
                break;
            case 3:
                $name = "交易失败";
                break;
            case 4:
                $name = "已取消";
                break;
        }
        return $name;
    }
}
