<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

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
    public function postLogin(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect()->route('welcome')->with('success', 'Đăng nhập thành công!');
            }
        }
        
        return back()->with('error', 'Email hoặc mật khẩu không đúng!');
    }
}