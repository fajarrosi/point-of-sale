<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\handleResponse;
use App\Http\Requests\LoginRequest;

class AuthController extends Controller
{
    use handleResponse;

    public function __construct()
    {
        $this->middleware('auth:api',['except' => ['Login']]);
    }
    
    public function Login(LoginRequest $request)
    {
        if (!$token = auth()->attempt($request->validated())) {
            return $this->HandleResponse(400, 'Wrong email or password');
        }else{
            $data = [
                'user' => auth()->user()->load(['account']),
                'access_token' => $token,
                'expire_in' => auth()->factory()->getTTL() * 60
            ];
            return $this->HandleResponse(200, 'Success Login',$data);
        }
    }

    public function Logout()
    {
        auth()->logout();
        return $this->HandleResponse(200,'Success Logout');
    }
}
