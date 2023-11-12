<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Rak;
use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except([
            'logout', 'welcome'
        ]);
    }

    //register form
    public function log()
    {
        return view('auth.log');
    }
    //register sumbit
    public function store(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|max:250|unique:users,email',
            'password' => 'required|min:8',
        ]);

        $user->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('auth.log');
    }
    //login form

    //proses login
    public function authentication(Request $request, Auth $auth)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $credentials = $request->only('email', 'password');
        if ($auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('welcome');
        }
        return back()->withErrors([
            'email' => 'Email password salah'
        ])->onlyInput('email');
    }

    public function welcome()
    {
        $jumlah_anggota = Anggota::count();
        $jumlah_buku = Buku::count();
        $jumlah_rak = Rak::count();
        $jumlah_pinjam = Peminjaman::count();

        return view('welcome', compact('jumlah_anggota', 'jumlah_buku', 'jumlah_rak', 'jumlah_pinjam'));

        if (Auth::check()) {
            return view('welcome');
        }
        return redirect()->route("auth.log");
    }

    //logout
    public function logout(Request $request, Auth $auth)
    {
        $auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('auth.log');
    }
}
