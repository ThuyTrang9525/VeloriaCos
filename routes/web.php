<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControllers;
use App\Http\Controllers\ProductController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/register',[UserControllers::class,'getRegister'])-> name('register');
Route::get('/login',[UserControllers::class,'getLogin'])-> name('login');


Route::get('/product', [ProductController::class, 'show'])->name('product.show');

Route::get('/checkout', [ProductController::class, 'checkout'])->name('checkout');
// Route::post('/checkout', [ProductController::class, 'placeOrder'])->name('checkout.store');
// Route::get('/checkout-success', [ProductController::class, 'success'])->name('checkout.success');