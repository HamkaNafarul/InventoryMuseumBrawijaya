<?php

namespace App\Http\Controllers;

use App\Models\Koleksi;
use App\Models\tanggal;
use App\Models\koleksibuku;
use Illuminate\Http\Request;

class HomeController extends Controller
//HomeController
{
    public function index()
    {
        {
            // Mengambil tiga koleksi terbaru berdasarkan ID
            $latestKoleksi = Koleksi::orderBy('id', 'desc')->take(3)->get();
        
            // Mengambil tiga buku terbaru berdasarkan ID
            $latestkoleksibuku = koleksibuku::orderBy('id', 'desc')->take(3)->get();
        
            return view('index', compact('latestKoleksi', 'latestkoleksibuku'));
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
        $data_penuh = tanggal::pluck('tanggal_penuh')->toArray();
        // dd($data_penuh);
        return view('surat', compact('data_penuh'));
    }
    public function detailkoleksi($id)
    {
        $koleksi = Koleksi::findOrFail($id);
        // dd($koleksi);                                                                                     
        return view('detailkoleksi',compact('koleksi'));
    }
    public function detailkoleksibuku($id)
    {
        $koleksibuku = koleksibuku::findOrFail($id);
        return view('detailkoleksibuku',compact('koleksibuku'));
    }

}
