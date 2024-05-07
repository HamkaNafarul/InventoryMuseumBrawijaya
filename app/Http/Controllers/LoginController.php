<?php

namespace App\Http\Controllers;

use yajra\DataTables\DataTables;
use App\Models\Koleksi;
use App\Models\koleksibuku;
use App\Models\surat;
use App\Models\User;
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
        $users = User::all(); // Mengambil semua user
        $jumlah_surat = $surat->count();
        $jumlah_koleksi_buku = $koleksibuku->count();
        $jumlah_koleksi_pameran = $koleksi->count();
        $jumlah_users = $users->count(); // Menghitung jumlah user
    
        return view('auth/dashboardd', compact('jumlah_koleksi_buku', 'jumlah_koleksi_pameran', 'jumlah_surat', 'jumlah_users'));    
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
    public function admin()
    {
        return view('auth/Admin');
    }
    public function json()
    {
        $User= User::select(['id','name','email']);
        $index = 1;
        return DataTables::of($User)
        ->addColumn('DT_RowIndex',function($data) use ($index) {
            return $index++;
        })
        ->addColumn('action', function ($row) {
            $editUrl = url('/dashboardd/koleksipameran/FormEditKoleksi/edit/' . $row->id);
            $deleteUrl = url('/dashboardd/koleksipameran/FormDeleteKoleksi/delete/' . $row->id);
            $detailUrl = url('/dashboardd/koleksipameran/DetailKoleksiAdmin/' . $row->id);
            return '<a href="' . $editUrl . '">Edit</a> | <a href="#" class="delete-users" data-url="' . $deleteUrl .'">Delete</a> | <a href="' . $detailUrl .'">Detail</a>';
        })
        
        ->toJson();
    }
    public function create()
    {
        return view('auth/From_Admin');
    }
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'email' => 'required',
        'name' => 'required',
        'password' => 'nullable',
    ]);  

    $encryptedPassword = bcrypt($validatedData['password']);

    User::create([
        'name'=>  $validatedData['name'],
        'email'=>  $validatedData['email'],
        'password'=>  $encryptedPassword,
        'superAdmin'=>  'superAdmin',
    ]);

    return redirect('dashboardd/Admin')->with('success', 'Data berhasil disimpan');
}

    function logout()
    {
        Auth::logout();
        return redirect('');
    }
    

}