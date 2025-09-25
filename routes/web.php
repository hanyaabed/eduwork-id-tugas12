<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', function() {
    return "List of products";
});

Route::get('/cart', function() {
    return "Your shopping cart";
});

Route::get('/checkout', function() {
    return "Checkout Page";
});

Route::get('/home_page', function() {
    return view('home.index');
})->name('home_page');
Route::get('/product_page', [ProductController::class, 'index'])->name('product_page');
Route::get('/cart_page', function() {
    return view('cart.index');
})->name('cart_page');