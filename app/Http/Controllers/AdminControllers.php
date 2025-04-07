<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\User;


use Illuminate\Http\Request;

class AdminControllers extends Controller
{
    public function getAdmin(){
        $products = Product::with('primaryImage')->get();
        $users = User::where('role_id', '!=', 2)->get();
            return view('Admins.admin')->with([
            'products' => $products,
            'users' => $users,
        ]);

    }

} 
