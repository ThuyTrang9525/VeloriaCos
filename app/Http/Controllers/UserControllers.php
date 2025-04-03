<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserControllers extends Controller
{
    function getRegister(){
        return view('Users.register');
    }
    public function postRegister(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|max:255|confirmed',
        ], [
            'password.confirmed' => 'Confirmed password does not match. Please re-enter!',
            'password.min' => 'Password must be at least 6 characters.',
        ]);
    
        User::create([
            'username' => $request->name,
            'email' => $request->email,
            'password_hash' => bcrypt($request->password),
        ]);
    
        return redirect()->route('login')->with('success', 'Registration successful');
    }
    
    public function getLogin(){
        return view('Users.login');
    }
    public function postlogin(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password_hash' => 'required|min:6',
    ]);

    if (Auth::attempt(['email' => $request->email, 'password' => $request->password_hash])) {
        // Lấy thông tin người dùng đã đăng nhập
        $user = Auth::user();

        // Kiểm tra role_id và chuyển hướng tương ứng
        if ($user->role_id == 1) { // Admin
            return redirect()->route('admin')->with('success', 'Login successful');
        } elseif ($user->role_id == 2) { // User
            return redirect()->route('homepage')->with('success', 'Login successful');
        }
    }

    return back()->with('error', 'Incorrect email or password');
}

    function getHomepage(){
        return view('Users.homepage');
    }
}