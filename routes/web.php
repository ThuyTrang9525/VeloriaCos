<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControllers;
use App\Http\Controllers\AdminControllers;
use App\Http\Controllers\ProductControllers;
use App\Http\Controllers\VNPayController;



use App\Http\Controllers\ProductController;
Route::get('/', function () {
    return view('master');
});

Route::get('/register',[UserControllers::class,'getRegister'])-> name('register');
Route::post('/register', [UserControllers::class, 'postRegister']);


Route::get('/login', [UserControllers::class, 'getLogin'])->name('login');
Route::post('/postlogin', [UserControllers::class, 'postlogin'])->name('postlogin');
Route::post('/logout', [UserControllers::class, 'logout'])->name('logout');


Route::get('/admin',[AdminControllers::class,'getAdmin'])-> name('admin');


Route::get('/product/{id}', [ProductController::class, 'showProductDetail'])->name('product.show');
Route::get('/product_list', [ProductController::class, 'getListProduct'])->name('product_list');


Route::get('/homepage', [UserControllers::class, 'getHomepage']) -> name('homepage');


Route::get('/checkout', [ProductController::class, 'checkout'])->name('checkout');
Route::post('/checkout', [ProductController::class, 'placeOrder'])->name('checkout.store');
Route::get('/checkout-success', [ProductController::class, 'success'])->name('checkout.success');

Route::get('vnpay/payment', [VNPayController::class, 'payment']);
Route::get('vnpay/return', [VNPayController::class, 'return'])->name('vnpay.return');