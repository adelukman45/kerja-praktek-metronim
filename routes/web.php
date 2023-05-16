<?php

use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\DashboardProductController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [ProductsController::class, 'index']);

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'active' => 'about'
    ]);
});

Route::get('/products', [ProductsController::class, 'products']);
Route::get('/products/detail/{product:slug}', [ProductsController::class, 'show']);
Route::get('/products/{category:name}', [ProductsController::class, 'category']);


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/categories/checkSlug', [DashboardCategoryController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/categories', DashboardCategoryController::class)->middleware('auth');
Route::get('/dashboard/products/checkSlug', [DashboardProductController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/products', DashboardProductController::class)->middleware('auth');
