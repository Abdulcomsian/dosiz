<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Redirect;

class productController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('admin.product.index', compact('products'));
    }      

    public function create()
    {
        return view('admin.product.add_product');
    }

    public function show($id)
    {

    }

    public function store(Request $request)
    {
        //
    }

    public function update(Request $request)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
