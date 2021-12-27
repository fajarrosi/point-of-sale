<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Http\Requests\SupplierRequest;

class SupplierController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    
    public function index()
    {
        $data = Supplier::latest()->get();
        return handleResponse(200,'Success get Supplier',$data);
    }

    public function store(SupplierRequest $request)
    {
        $data = $request->all();
        $supplier = Supplier::create($data);
        return $supplier ? handleResponse(200) : handleResponse(400,'Failed create Supplier');
    }

    public function show($id)
    {
        $supplier = Supplier::findOrFail($id);
        return $supplier ? handleResponse(200,'Success get One Supplier',$supplier) : handleResponse(400,'Failed get One Supplier');
    }

    public function update(SupplierRequest $request)
    {
        $data = $request->except('id');
        $supplier = Supplier::findOrFail($request->id)->update($data);
        return $supplier ? handleResponse(200,'Success update Supplier') : handleResponse(400,'Failed update Supplier');
    }

    public function destroy(Request $request)
    {
        $supplier = Supplier::findOrFail($request->id)->delete();
        return $supplier ? handleResponse(200,'Success delete Supplier') : handleResponse(400,'Failed delete Supplier');
    }
}
