<?php

namespace App\Http\Controllers;

use App\Models\baseModel;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function json($code, $msg)
    {
        return response()->json(
            [
                "statusCode" => $code,
                "message" => $msg,
                "navTabId" => "",
                "rel" => "",
                "callbackType" => "closeCurrent",
                "forwardUrl" => ""
            ]);
    }

    public function getPage(Request $request, baseModel $model)
    {
        $all = $request->all();

    }
}
