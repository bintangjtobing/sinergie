<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login.index');
    }
    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/dashboard')->with('sukses', 'Login in...');
        }
        return redirect('/')->with('gagal', 'Auth authorization failed or check your email and password!');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            $this->username() => 'required|string',
            'password' => 'required|string',
            'code' => 'required|exists|users,code',
        ]);
    }
}
