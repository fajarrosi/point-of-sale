<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\User;
use App\Http\Requests\KasirRequest;

class KasirController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }
    
    public function getKasir()
    {
        $data = Account::where('role','kasir')->get();
        return handleResponse(200,'success get data kasir',$data);
    }

    public function getKasirById($id)
    {
        $data = Account::findOrFail($id);
        return handleResponse(200,'success kasir by id',$data);
    }
    
    public function addKasir(KasirRequest $request)
    {
        $user = User::create(['email' => $request->email,'password' => bcrypt($request->password)]);
        $dataAkun = $request->except('email','password');
        $user->account()->create($dataAkun);
        return $user ? handleResponse(200,'success add kasir') : handleResponse(400,'failed add kasir');
    }

    public function acceptKasir(Request $request)
    {
        $account = Account::findOrFail($request->id)->update(['is_verified' => true]);
        return $account ? handleResponse(200,'success accept kasir') : handleResponse(400,'failed accept kasir');

    }

    public function declineKasir(Request $request)
    {
        $account = Account::findOrFail($request->id);
        $user = User::where('email',$account->email)->delete();
        return handleResponse(200,'Success decline kasir');
    }

}
