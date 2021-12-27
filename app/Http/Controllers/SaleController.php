<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use App\Models\Invoice;
use App\Models\ProductPrice;
use App\Http\Requests\SaleRequest;

class SaleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function store(SaleRequest $request)
    {
        $userId = auth()->user()->id;
        $dataInvoice = $request->only('total_amount','date');
        $dataInvoice['user_id'] = $userId;
        $invoice = Invoice::create($dataInvoice);

        $dataSale = $request->sale;
        $quantity_total = 0;
        if (is_array($dataSale) && !empty($dataSale)) {
            for ($i=0; $i < count($dataSale) ; $i++) { 
                $sale = Sale::create([
                    'invoice_id' => $invoice->id,
                    'product_id' => $dataSale[$i]['product_id'],
                    'size_id' => $dataSale[$i]['size_id'],
                    'quantity' => $dataSale[$i]['quantity'],
                    'unit_price' => $dataSale[$i]['unit_price'],
                    'sub_total' => $dataSale[$i]['sub_total']
                ]);
                $productprice = ProductPrice::where(['product_id' => $dataSale[$i]['product_id'],'size_id' => $dataSale[$i]['size_id']])->decrement('stock',$dataSale[$i]['quantity']);
            }
        }
        return $invoice ? handleResponse(200,'success create sale') : handleResponse(400,'failed create sale');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
