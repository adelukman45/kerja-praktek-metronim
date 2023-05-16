<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function index()
    {
        $title = 'Produk Terbaru';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        return view('home', [
            'title' => '' . $title,
            'active' => 'products',
            'products' => Product::latest()->filter(request(['search', 'category']))->paginate(3)->withQueryString(),
            // 'products' => DB::table('products')->limit(1)->get(),
            'categories' => Category::all(),
        ]);
    }

    public function products(Product $product)
    {
        return view('products', [
            'title' => 'Semua Produk',
            'active' => 'posts',
            'products' => Product::latest()->filter(request(['search', 'category']))->paginate(6)->withQueryString(),
            'categories' => Category::all(),
        ]);
    }
    public function category(Category $category)
    {
        // dd($category->id);
        return view('product', [
            'title' => 'Single Post',
            'category' => $category,
            'products' => Product::where('category_id', $category->id)->paginate(6),
            'categories' => Category::all(),
        ]);
    }

    public function show(Product $product)
    {
        return view('detail', [
            'title' => 'Single Post',
            'active' => 'posts',
            'post' => $product
        ]);
    }
}
