<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserControllers extends Controller
{
    function getRegister(){
        return view('Users.register');
    }
    function getLogin(){
        return view('Users.login');
    }
}
