<?php

namespace App\Http\Traits;

trait ErrorMessage
{
    function sendResponse($result, $message)
    {
        $response = [
            'success' => true,
            'status' => 200,
            'data' => $result,
            'message' => $message,
        ];
        return response()->json($response, 200);
    }

    function sendError($error, $errorMessages = [], $code)
    {
        $response = [
            'success' => false,
            'status' => $code,
            'message' => $error,
        ];

        if (!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }
        return response()->json($response, $code);
    }
}
