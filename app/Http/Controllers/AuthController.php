<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Models\Account;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendOTP;
use App\Mail\Resendotp;
use App\Mail\ForgotPassword;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use DB;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api',['except' => ['Login','Register','forgotPassword']]);
    }
    
    public function Login(LoginRequest $request)
    {
        if (!$token = auth()->attempt($request->validated())) {
            return handleResponse(400, 'Wrong email or password');
        }else{
            $data = [
                'access_token' => $token,
                'user' => auth()->user()->load(['account'])
            ];
            return handleResponse(200, 'Success Login',$data);
        }
    }

    public function Logout()
    {
        auth()->logout();
        return handleResponse(200,'Success Logout');
    }

    public function Register(RegisterRequest $request)
    {
        $user = $request->only(['email','password']);
        $account = $request->except('password');
        $account['role'] = 'kasir';
        $account['verification_code'] = generateRandomInteger(4);
        DB::beginTransaction();
        try {
            $createUser = User::create(['email'=>$request->email,'password'=>bcrypt($request->password)]);
            $createUser->account()->create($account);
            DB::commit();
            $password = $request->password;
            // Mail::to($createUser->email)->send(new SendOTP($createUser,$password));
            $data = [
                'access_token' => auth()->attempt($request->only('email','password')),
                'user' => auth()->user()->load(['account'])
            ];
            return handleResponse(200,'success register',$data);
        } catch (\Throwable $th) {
            DB::rollback();
            return handleResponse(400,$th->getMessage());
        }

    }

    public function EmailVerified(Request $request)
    {
        $email = auth()->user()->email;
        $verificationCode = $request->otp;
        DB::beginTransaction();
        try {
            $account = Account::where('email', $email)->where('verification_code', $verificationCode)->first();
            if ($account) {
                $account->update(['verification_code' =>null]);
                $user = User::where('email', $email)->update(['email_verified_at' => now()]);
                DB::commit();
                return handleResponse(200,'success verify otp');
            }else{
                throw new \Exception("fail verify otp", 1);
                
            }
        } catch (\Exception $th) {
            DB::rollback();
            return handleResponse(400,$th->getMessage());
        }
    }

    public function ResendOTP()
    {
        $email = auth()->user()->email;
        $newOtp = generateRandomInteger(4);

        $account = Account::where('email',$email)->update(['verification_code' => $newOtp]);
        $data = Account::where('email',$email)->first();

        Mail::to($email)->send(new Resendotp($data));
        return $account ? handleResponse(200,'success resend otp') : handleResponse(400,'failed resend otp');
    }

    public function forgotPassword(Request $request)
    {
        $email = $request->email;
        $password = generateRandomString(8);
        $user = User::where('email',$email)->first();
        if ($user) {
            $user->update(['password'=> bcrypt($password)]);
            Mail::to($email)->send(new ForgotPassword($password));
            return handleResponse(200,'success get new password') ;
        }else{
            return handleResponse(400,'failed, your email is not found');
        }
    }

    public function checkOldPassword(Request $request)
    {
        $email = auth()->user()->email;
        $user = User::where('email',$email)->first();

        $cek = Hash::check($request->password, $user->password);
        return $cek ? handleResponse(200, "you can change password now")  : handleResponse(400, "wrong password ");
    }

    public function changePassword(Request $request)
    {
        $email =  auth()->user()->email;

        $new_password = $request->password;

        $user = User::where('email',$email)->update(['password' => bcrypt($new_password)]);
        return $user ? handleResponse(200, 'Success change password') : handleResponse(400, 'Failed change password');
    }
}
