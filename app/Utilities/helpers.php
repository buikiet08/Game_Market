<?php

use Illuminate\Http\Response;


if (!function_exists('handleResponse')) {
    function handleResponse($statusCode = Response::HTTP_OK, $message = 'Success', $data = [])
    {
        return response()->json([
            "statusCode"    => $statusCode,
            "message"       => $message,
            "data" => $data
        ], $statusCode);
    }
}
