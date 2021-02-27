<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function CommonResponse(bool $status, string $message, $data, int $statusCode)
    {
        $response = [
            "status" => $status,
            "message" => $message,
            "data" => $data,
        ];
        return response()->json($response, 200);
    }
}
