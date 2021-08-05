<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Session\Session;

class LoginController extends Controller
{
    public function loginPage() {
        return view('login');
    }

    public function login(Request $request) {
        $id = $request->id;
        $password=$request->password;
        $credentials=['uid'=>$id, 'password'=>$password];

        if(!Auth::attempt($credentials)){
            return "로그인 정보가 정확하지 않습니다.";
        }
        return redirect()->route('mypage', ['login'=>auth()->user()]);
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('main');
    }
}
