<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Http\Requests\SupplierRequest;
use App\Http\Traits\GlobalFunction;

class SupplierController extends Controller
{
    use GlobalFunction;
    public function index()
    {
        $data = Supplier::latest()->get();
        return $this->handleResponse(200,'Success get Supplier',$data);
    }

    public function store(SupplierRequest $request)
    {
        $data = $request->all();
        $supplier = Supplier::create($data);
        return $supplier ? $this->handleResponse(200,'Success create Supplier') : $this->handleResponse(400,'Failed create Supplier');
    }

    public function show($id)
    {
        $supplier = Supplier::findOrFail($id);
        return $supplier ? $this->handleResponse(200,'Success get One Supplier',$supplier) : $this->handleResponse(400,'Failed get One Supplier');
    }

    public function update(SupplierRequest $request)
    {
        $data = $request->except('id');
        $supplier = Supplier::findOrFail($request->id)->update($data);
        return $supplier ? $this->handleResponse(200,'Success update Supplier') : $this->handleResponse(400,'Failed update Supplier');
    }

    public function destroy(Request $request)
    {
        $supplier = Supplier::findOrFail($request->id)->delete();
        return $supplier ? $this->handleResponse(200,'Success delete Supplier') : $this->handleResponse(400,'Failed delete Supplier');
    }
}
