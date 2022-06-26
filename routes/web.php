<?php

use App\Http\Controllers\ProductController;
use App\Models\product;
use Database\Seeders\ProductSeeder;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Route::get('shop', function () {

    $products = product::all();
    return view('shop.index', compact('products'));
});

Route::get('/shop/{{ $product->id }}', function () {
   
    return view('shop.show');
});

Route::get('cart', function () {
    return view('cart.cart');
});