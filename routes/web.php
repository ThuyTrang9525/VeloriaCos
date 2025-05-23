<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControllers;
use App\Http\Controllers\AdminControllers;
use App\Http\Controllers\ProductControllers;
use App\Http\Controllers\VNPayController;
use App\Http\Controllers\CartController;



use App\Http\Controllers\ProductController;
Route::get('/', function () {
    return view('master');
});

Route::get('/register',[UserControllers::class,'getRegister'])-> name('register');
Route::post('/register', [UserControllers::class, 'postRegister']);


Route::get('/login', [UserControllers::class, 'getLogin'])->name('login');
Route::post('/postlogin', [UserControllers::class, 'postlogin'])->name('postlogin');
Route::post('/logout', [UserControllers::class, 'logout'])->name('logout');

Route::get('/search', [ProductController::class, 'search'])->name('search');


Route::get('/admin',[AdminControllers::class,'getAdmin'])-> name('admin');

Route::get('/homepage', [UserControllers::class, 'getHomepage'])->name('homepage');
Route::get('/cart', [UserControllers::class, 'getcart']);

Route::get('/logout', [UserControllers::class, 'logout'])->name('logout');
Route::get('/product/{id}', [ProductController::class, 'showProductDetail'])->name('product.show');
// Route để lấy danh sách sản phẩm tổng quát
Route::get('/product_list', [ProductController::class, 'getListProduct'])->name('product_list');
// Route để lấy sản phẩm theo danh mục
Route::get('/product_list/{category_id}', [ProductController::class, 'getListProduct'])->name('category_products');
Route::get('/category/{id}', [ProductController::class, 'showCategory'])->name('category.show');
Route::get('/checkout', [ProductController::class, 'checkout'])->name('checkout');
Route::post('/checkout', [ProductController::class, 'placeOrder'])->name('checkout.store');
Route::get('/checkout-success', [ProductController::class, 'success'])->name('checkout.success');

Route::get('vnpay/payment', [VNPayController::class, 'payment']);
Route::get('vnpay/return', [VNPayController::class, 'return'])->name('vnpay.return');

Route::get('/aboutUs', [UserControllers::class, 'getAboutUs'])->name('aboutUs');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

Route::post('/cart/add/{id}', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/update/{id}', [CartController::class, 'updateCart'])->name('cart.update');

Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');

Route::put('/cart/update/{rowId}', [CartController::class, 'updateCart'])->name('cart.update');

Route::get('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');