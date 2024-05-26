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
        $suratcount = surat::where('status', 0)->count();
    
        return view('auth/dashboardd', compact('jumlah_koleksi_buku', 'jumlah_koleksi_pameran', 'jumlah_surat', 'jumlah_users','suratcount'));    
    }    
    public function suratmasuk()
    {
        $surats = surat::all();
        // dd($surats);
        $suratcount = surat::where('status', 0)->count();
        // dd($suratcount);
        return view('auth/suratmasuk',compact('surats','suratcount'));
    }
    public function koleksipameran(Request $request)
    {   
        //koleksi pameran
        $search = $request->get('search');
    
        $koleksi = Koleksi::where('asal_ditemukan', 'like', "%$search%")
        ->orWhere('no_inventaris', 'like', "%$search%")
        ->orWhere('nama_barang', 'like', "%$search%")
        ->get();
        // dd($koleksi);
        $suratcount = surat::where('status', 0)->count();
    
    return view('auth/koleksipameran', compact('koleksi', 'search','suratcount'));
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


    public function koleksibuku(Request $request)
    {
        $search = $request->get('search');

        $koleksiBuku = KoleksiBuku::where('judul', 'like', "%$search%")
                                    ->orWhere('pengarang', 'like', "%$search%")
                                    ->orWhere('penerbit', 'like', "%$search%")
                                    ->get();
                                    $suratcount = surat::where('status', 0)->count();
    
    return view('auth/koleksibuku', compact('koleksiBuku', 'search','suratcount'));
    }
    public function admin()
    {
        $suratcount = surat::where('status', 0)->count();
        return view('auth/Admin', compact('suratcount'));
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
            $deleteUrl = url('/dashboardd/Admin/delete/' . $row->id);
            return '<a href="#" class="delete-users" data-url="' . $deleteUrl .'">Delete</a>';
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
public function destroy($id)
{
    $user = User::findOrFail($id);
    if($user->id===Auth::id()){
        return response()->json(['message' => 'Data Tidak Bisa Dihapus']);
    }

    
    // Hapus gambar jika ada

    $user->delete();

    return response()->json(['message' => 'Data berhasil dihapus']);
}

    function logout()
    {
        Auth::logout();
        return redirect('');
    }
    

}