<?php

namespace App\Http\Controllers\Auth;

use App\MuridDB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class muridAuthController extends Controller
{
    use AuthenticatesUsers;
    protected $guard = 'siswaAuth';
    protected $redirectTo = '/siswa';
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function showLoginForm()
    {
        return view('siswa.index');
    }
    public function siswaAuth()
    {
        return auth()->guard('siswaAuth');
    }
    public function showRegisterPage()
    {
        return view('murid.daftar');
    }
    public function registrasi(Request $request)
    {
        $request->validate([
            'nama_murid' => 'required|string|max:199',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:6|confirmed'
        ]);
        MuridDB::create([
            'nama_murid' => $request->nama_murid,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'nohp' => $request->nohp,
            'kelas' => $request->kelas,
        ]);
        return view('siswa.index')->with('success', 'Registration Success');
    }
    public function login(Request $request)
    {
        if (auth()->guard('siswaAuth')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('adminpage');
        }
        return back()->withErrors(['email' => 'Email or password are wrong.']);
    }
}
