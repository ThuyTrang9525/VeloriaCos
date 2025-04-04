<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class AdminControllers extends Controller
{
    public function getAdmin(){
        $products = Product::with('primaryImage')->get();
        
        return view('Admins.admin')->with([
            'products' => $products
        ]);

    }

} 
