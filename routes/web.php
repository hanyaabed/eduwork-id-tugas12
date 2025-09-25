<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home_page');

Route::get('/product', [ProductController::class, 'index'])->name('product_page');

Route::get('/cart', [CartController::class, 'index'])->name('cart_page');

Route::get('/checkout', function() {
    return "Checkout Page";
});