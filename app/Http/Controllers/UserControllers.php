<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserControllers extends Controller
{
    function getRegister(){
        return view('Users.register');
    }
    function postRegister(Request $request){
        $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255',
        ]);
    }
    
    function getLogin(){
        return view('Users.login');
    }
}


// public function getLogin(){
//     return view('page.login');
// }
// public function postLogin(Request $request){
//     $request->validate([
//         'email' => 'required|email',
//         'password' => 'required|min:6',
//     ]);
//     if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
//         return redirect()->route('trang-chu')->with('success', 'Đăng nhập thành công!');
//     }
//     return back()->with('error', 'Email hoặc mật khẩu không đúng!');
// }

// public function logout()
// {
//     Auth::logout();
//     return redirect()->route('login')->with('success', 'Bạn đã đăng xuất thành công!');
// }
// public function getSignup(){
//     return view('page.signup');
// }

// public function postSignup(Request $request){
//     $request->validate([
//                 'fullname' => 'required|string|max:255',
//                 'email' => 'required|string|max:255',
//                 'password' => 'required|string|max:255',
//             ]);
//     User::create([
//         'name' => $request-> fullname,
//         'email' => $request -> email,
//         'password' => $request -> password,
//     ]);
//     return redirect()->route('login')->with('success', 'Đăng kí thành công');
// }