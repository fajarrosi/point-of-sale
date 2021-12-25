<?php

namespace App\Http\Traits;

trait GlobalFunction{

    public function handleResponse($httpStatus = 200, $message = 'success', $data = null)
    {
        $response = [
            'status' => $httpStatus == 200 ? "Success" : "Error",
            'message' => $message,
    		'data' => $data
        ];

        return response()->json($response,$httpStatus);
    }

    public function generateRandomInteger($length)
	{
        $characters = '0123456789';
        
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= rand(0, $charactersLength - 1);
        }
        return $randomString;
	}

    public function generateRandomString($length)
	{
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
	}
}