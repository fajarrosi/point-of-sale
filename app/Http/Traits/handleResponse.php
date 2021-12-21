<?php

namespace App\Http\Traits;

trait handleResponse{

    public function HandleResponse($httpStatus = 200, $message = 'success', $data = null)
    {
        $response = [
            'status' => $httpStatus == 200 ? "Success" : "Error",
            'message' => $message,
    		'data' => $data
        ];

        return response()->json($response,$httpStatus);
    }
}