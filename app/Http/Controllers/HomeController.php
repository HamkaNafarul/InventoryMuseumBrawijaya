<?php

namespace App\Http\Controllers;

use App\Models\Koleksi;
use App\Models\surat;
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
    $tanggalsekarang = now()->format('Y-m-d'); // Format tanggal: YYYY-MM-DD

    // dd($tanggalsekarang);

    $surat = surat::where('tanggal', '>=', $tanggalsekarang)->get();
    // dd($surat);
    $data_penuh = Tanggal::pluck('tanggal_penuh')->toArray();
    // dd($data_penuh);
    return view('surat', compact('surat', 'data_penuh'));
}

    public function detailkoleksibuku($id)
    {
    $koleksibuku = koleksibuku::findOrFail($id);
    
    $similarCollections = koleksibuku::where('bahasa', $koleksibuku->bahasa)
                                ->where('id', '!=', $id) // agar tidak termasuk koleksi saat ini
                                ->limit(5) // batasi jumlah koleksi yang ditampilkan
                                ->get();

    return view('detailkoleksibuku', compact('koleksibuku', 'similarCollections'));
    }

    public function detailkoleksi($id)
    {
    $koleksi = Koleksi::findOrFail($id);
    
    // Mengambil koleksi yang mirip berdasarkan tahun_abad_masa
    $similarCollections = Koleksi::where('tahun_abad_masa', $koleksi->tahun_abad_masa)
                                ->where('id', '!=', $id) // agar tidak termasuk koleksi saat ini
                                ->limit(3) // batasi jumlah koleksi yang ditampilkan
                                ->get();

    return view('detailkoleksi', compact('koleksi', 'similarCollections'));
}
    public function about()
    {
    return view('about');  
    }

    public function suratRespon(){
        $tanggalsekarang = now()->format('Y-m-d'); // Format tanggal: YYYY-MM-DD

    // dd($tanggalsekarang);

    $surat = surat::where('tanggal', '>=', $tanggalsekarang)->get();
    // dd($surat);
    $data_penuh = Tanggal::pluck('tanggal_penuh')->toArray();
        return view('suratRespon', compact('data_penuh'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'captcha' => 'required|captcha',
            'nomor_hp' => 'required',
            'nama' => 'required',
            'asal_intansi' => 'required',
            'tanggal' => 'required',
            'agenda' => 'required',
            'file' => 'required|mimes:pdf',
        ]);

        if ($request->hasFile('file')) {
            $imagePath = $request->file('file')->store('submit', 'public');
            $validatedData['file'] = $imagePath;
        }

 // Tambahkan status default 0
 $validatedData['status'] = 0;

        surat::create($validatedData);

        return redirect('/surat')->with('success', 'Data berhasil disimpan');
    }

}