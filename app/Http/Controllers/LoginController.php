<?php

namespace App\Http\Controllers;

use App\Models\Koleksi;
use App\Models\koleksibuku;
use App\Models\surat;
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
        $koleksi = Koleksi::all();
        $koleksibuku = koleksibuku::all();
        $surat = surat::all();
        $jumlah_surat = $surat->count();
        $jumlah_koleksi_buku = $koleksibuku->count();
        $jumlah_koleksi_pameran = $koleksi->count();

        return view('auth/dashboardd', compact('jumlah_koleksi_buku', 'jumlah_koleksi_pameran','jumlah_surat'));    
    }
    public function suratmasuk()
    {
        $surats = surat::all();
    return view('auth/suratmasuk',compact('surats'));
    }
    public function koleksipameran()
    {
        $koleksis = Koleksi::all();
        // dd($koleksis);
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


    public function koleksibuku()
    {
    return view('auth/koleksibuku');
    }
    function logout()
    {
        Auth::logout();
        return redirect('');
    }
    

}