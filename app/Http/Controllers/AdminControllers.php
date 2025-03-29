<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminControllers extends Controller
{
    public function getAdmin(){
        return view('Admins.admin');
    }
} 
