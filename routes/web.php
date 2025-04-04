<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControllers;
use App\Http\Controllers\AdminControllers;
use App\Http\Controllers\ProductControllers;



use App\Http\Controllers\ProductController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/register',[UserControllers::class,'getRegister'])-> name('register');
Route::post('/register', [UserControllers::class, 'postRegister']);


Route::get('/login', [UserControllers::class, 'getLogin'])->name('login');
Route::post('/postlogin', [UserControllers::class, 'postlogin'])->name('postlogin');

Route::get('/admin',[AdminControllers::class,'getAdmin'])-> name('admin');

Route::get('/homepage', [UserControllers::class, 'getHomepage']);


// Route::get('/featured-collections', [ProductController::class, 'showFeaturedCollections'])->name('featured.collections');

Route::get('/product', [ProductController::class, 'show'])->name('product.show');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');


Route::get('/checkout', [ProductController::class, 'checkout'])->name('checkout');
Route::post('/checkout', [ProductController::class, 'placeOrder'])->name('checkout.store');
Route::get('/checkout-success', [ProductController::class, 'success'])->name('checkout.success');

Route::get('vnpay/payment', [VNPayController::class, 'payment']);
Route::get('vnpay/return', [VNPayController::class, 'return'])->name('vnpay.return');