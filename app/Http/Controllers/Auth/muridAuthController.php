<?php

namespace App\Http\Controllers\Auth;

use App\muridAuthDB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class muridAuthController extends Controller
{
    use AuthenticatesUsers;
    protected $guard = 'murid';
    protected $redirectTo = '/siswa/dashboard';
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
        return auth()->guard('murid');
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
        $this->validate($request, ['email' => 'required|email', 'password' => 'required']);
        if (auth()->guard('murid')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('siswadashboard');
        }
        return back()->with(['sukses' => 'Silahkan periksa kembali email/password kamu ya..']);
    }
    public function logout()
    {
        if (Auth::guard('murid')->check()) {
            Auth::guard('murid')->logout();
        }
        return redirect('/siswa');
    }
}
