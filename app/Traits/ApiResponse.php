<?php

namespace App\Traits;

trait ApiResponse
{
    public function success($data, $code)
    {
        return response()->json([
            "success" => true,
            "data" => $data,
            "errors" => null
        ], $code);
    }

    public function error($messages, $code)
    {
        return response()->json([
            "success" => false,
            "data" => null,
            "errors" => $messages
        ], $code);
    }
}
