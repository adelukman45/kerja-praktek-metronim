<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductsController extends Controller
{
    public function index()
    {
        return view('home', [
            'product' => Product::all()->first()
        ]);
    }
    public function products()
    {
        return view('products', [
            'products' => Product::all()
        ]);
    }
}
