<?php

namespace App\Http\Controllers;

use App\Models\Koleksi;
use App\Models\koleksibuku;
use Illuminate\Http\Request;

class HomeController extends Controller
//HomeController
{
    public function index()
    {
          {
        $koleksi = Koleksi::all();
        $koleksibuku = koleksibuku::all();
        $jumlah_koleksi_buku = $koleksibuku->count();
        $jumlah_koleksi_pameran = $koleksi->count();

        return view('index', compact('jumlah_koleksi_buku', 'jumlah_koleksi_pameran'));    
    }
    }
    public function koleksi(Request $request)
    {
        $query = $request->input('query');

    $koleksi = Koleksi::where('nama_barang', 'LIKE', "%$query%")
                        ->orWhere('tahun_abad_masa', 'LIKE', "%$query%")
                        ->orWhere('cara_didapat', 'LIKE', "%$query%")
                        ->get();
        return view('koleksi',compact('koleksi'));
    }
    public function katalogbuku(Request $request)
    {
        $query = $request->input('query');

    $koleksibuku = koleksibuku::where('judul', 'LIKE', "%$query%")
                        ->orWhere('pengarang', 'LIKE', "%$query%")
                        ->orWhere('tempat_terbit', 'LIKE', "%$query%")
                        ->get();
        return view('katalogbuku',compact('koleksibuku'));
    }
    public function surat()
    {
        return view('surat');
    }
    public function detailkoleksi($id)
    {
        $koleksi = Koleksi::findOrFail($id);
        return view('detailkoleksi',compact('koleksi'));
    }
    public function detailkoleksibuku($id)
    {
        $koleksibuku = koleksibuku::findOrFail($id);
        return view('detailkoleksibuku',compact('koleksibuku'));
    }

}
