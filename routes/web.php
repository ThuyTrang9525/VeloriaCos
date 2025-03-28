<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControllers;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register',[UserControllers::class,'getRegister'])-> name('register');
Route::get('/login',[UserControllers::class,'getLogin'])-> name('login');

