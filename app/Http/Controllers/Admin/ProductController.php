<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Traits\GlobalFunction;
use App\Models\Category;
use App\Models\Size;
use App\Models\Product;
use App\Models\ProductPrice;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    use GlobalFunction;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::latest()->with('price.size')->get();
        return $this->handleResponse(200,'Success get product',$data);
    }

    public function getCategory()
    {
        $data = Category::latest()->get();
        return $this->handleResponse(200,'Success get category',$data);
    }

    public function getSize()
    {
        $data = Size::latest()->get();
        return $this->handleResponse(200,'Success get size',$data);
    }

    public function store(ProductRequest $request)
    {
        $product = Product::updateOrCreate(['product'=>$request->product],['category_id'=>$request->category_id]);

        $Productprice1 = $request->only(['size_id']);
        $Productprice1['product_id'] = $product->id;
        $Productprice2 = $request->only(['price','stock']);
        $newProductprice = ProductPrice::updateOrCreate($Productprice1,$Productprice2);
        return $newProductprice ? $this->handleResponse(200,'Success create new Product') : $this->handleResponse(400,'Failed create new Product');

    }

    public function show($id)
    {
        $product = Product::with('price.size')->findOrFail($id);
        return $product ? $this->handleResponse(200,'Success get One product',$product) : $this->handleResponse(400,'Failed get One product');
    }

    public function destroy(Request $request)
    {
        $Product = Product::findOrFail($request->id)->delete();
        return $Product ? $this->handleResponse(200,'Success delete Product') : $this->handleResponse(400,'Failed delete Product');
    }
}
