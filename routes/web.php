<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControllers;
use App\Http\Controllers\AdminControllers;




Route::get('/', function () {
    return view('welcome')->name('welcome');
});

Route::get('/register',[UserControllers::class,'getRegister'])-> name('register');
Route::post('/register', [UserControllers::class, 'postRegister']);


Route::get('/login', [UserControllers::class, 'getLogin'])->name('login');
Route::post('/login', [UserControllers::class, 'postLogin']);

Route::get('/admin',[AdminControllers::class,'getAdmin'])-> name('admin');
