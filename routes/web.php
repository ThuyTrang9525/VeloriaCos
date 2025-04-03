<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControllers;
use App\Http\Controllers\AdminControllers;
use App\Http\Controllers\ProductControllers;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/register',[UserControllers::class,'getRegister'])-> name('register');
Route::post('/register', [UserControllers::class, 'postRegister']);


Route::get('/login', [UserControllers::class, 'getLogin'])->name('login');
Route::post('/postlogin', [UserControllers::class, 'postlogin'])->name('postlogin');

Route::get('/admin',[AdminControllers::class,'getAdmin'])-> name('admin');

Route::get('/homepage', [UserControllers::class, 'getHomepage']);
Route::get('/cart', [UserControllers::class, 'getCart']);