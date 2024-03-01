<?php

namespace App\Http\Controllers;

use App\Models\Koleksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function viewlogin()
    {
        return view('auth/login');
    }
    public function dashboardd()
    {
    return view('auth/dashboardd');
    }
    public function suratmasuk()
    {
    return view('auth/suratmasuk');
    }
    public function koleksipameran()
    {
        $koleksis = Koleksi::all();
    return view('auth/koleksipameran',compact('koleksis'));
    }
    function login_proses(Request $request)
    {
        $request->validate([
            'email' => 'required|email', // Mengganti 'username' dengan 'email' dan menambahkan validasi email
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi', // Mengganti pesan validasi
            'email.email' => 'Format email tidak valid', // Menambahkan pesan validasi untuk format email
            'password.required' => 'Password wajib diisi',
        ]);

        $infologin = [
            'email' => $request->email, // Menggunakan 'email' dari form input
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            $user = Auth::user();
            // dd($user->role);
            // dd($infologin);
            // dd($user);
            if ($user->role === 'superAdmin') {
                return redirect('dashboardd');
            } else {
                return redirect()->route('login')->withErrors('Role pengguna tidak valid')->withInput();
            }
        } else {
            return redirect()->route('login')->withErrors('Email dan password tidak sesuai')->withInput();
        }
    }


    function logout()
    {
        Auth::logout();
        return redirect('');
    }

}