<?php

namespace App\Http\Controllers;

use App\Models\koleksibuku;
use App\Models\nomor_koleksiBuku;
use Illuminate\Http\Request;
use yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;


class KoleksiBukuControlller extends Controller
{
public function pdf(Request $request)
{
    $search = $request->get('search');

    $koleksiBuku = KoleksiBuku::where('judul', 'like', "%$search%")
                                ->orWhere('pengarang', 'like', "%$search%")
                                ->orWhere('penerbit', 'like', "%$search%")
                                ->join('nomor_koleksibukus', 'koleksi.id', '=', 'nomor_koleksibukusbuku.koleksi_id')
                                ->select('koleksi.*', 'nomor_koleksibukus.no_inventaris_buku')
                                ->get();

    $pdf = PDF::loadView('auth.PdfView_Buku', compact('koleksiBuku','search'));
    return $pdf->stream('laporan_pencarian.pdf');
}


    public function create()
    {
        return view('auth.FormBuku');
    }
    public function store (Request $request)
    {
        $validatedData = $request->validate([
            'no_inventaris_buku' => 'required|unique:nomor_koleksibukus,no_inventaris_buku',
            'no_registrasi_buku' => 'required|unique:nomor_koleksibukus,no_registrasi_buku',
            'judul' => 'required',
            'pengarang' => 'nullable',
            'edisi' => 'nullable',
            'tahun_terbit' => 'nullable',
            'issn' => 'nullable',
            'penerbit' => 'nullable',
            'tempat_terbit' => 'nullable',
            'kualifikasi' => 'nullable',
            'bahasa' => 'nullable',
            'abstrak' => 'nullable',
            'subjek' => 'nullable',
            'sampul' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('sampul')) {
            $imagePath = $request->file('sampul')->store('uploads', 'public');
            $validatedData['sampul'] = $imagePath;
        }
        $koleksibuku = koleksibuku::create($validatedData);
        nomor_koleksiBuku ::create([
            'no_inventaris_buku' => $validatedData['no_inventaris_buku'],
            'no_registrasi_buku' => $validatedData['no_registrasi_buku'],
            'koleksibuku_id' => $koleksibuku->id,
        ]);

        return redirect('dashboardd/koleksibuku')->with('success', 'Data berhasil disimpan');
    }
    public function edit(string $id)
    {
        $koleksibuku = koleksibuku::with('nomorkoleksibuku')->find($id);
        return view('auth.FormBukuEdit',compact('koleksibuku'));
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
           'no_inventaris_buku' => 'required|unique:nomor_koleksibukus,no_inventaris_buku,' . $id,
            'no_registrasi_buku' => 'required|unique:nomor_koleksibukus,no_registrasi_buku,' . $id,
            'judul' => 'required',
            'pengarang' => 'nullable',
            'edisi' => 'nullable',
            'tahun_terbit' => 'nullable',
            'issn' => 'nullable',
            'penerbit' => 'nullable',
            'tempat_terbit' => 'nullable',
            'kualifikasi' => 'nullable',
            'bahasa' => 'nullable',
            'abstrak' => 'nullable',
            'subjek' => 'nullable',
            'sampul' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $koleksibuku = KoleksiBuku::findOrFail($id);
        $nomorKoleksi = nomor_koleksibuku::where('koleksibuku_id', $id)->first();


        // Jika tidak ada sampul baru yang diunggah, gunakan sampul lama
        if (!$request->hasFile('sampul')) {
            $validatedData['sampul'] = $koleksibuku->sampul;
        } else {
            // Hapus sampul lama jika ada sampul baru yang diunggah
            if ($koleksibuku->sampul) {
                Storage::disk('public')->delete($koleksibuku->sampul);
            }
            $imagePath = $request->file('sampul')->store('uploads', 'public');
            $validatedData['sampul'] = $imagePath;
        }    
        $koleksibuku->update($validatedData);
        $nomorKoleksi->update([
            'no_inventaris_buku' => $validatedData['no_inventaris_buku'],
            'no_registrasi_buku' => $validatedData['no_registrasi_buku'],
        ]);

    return redirect('dashboardd/koleksibuku')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
    $koleksibuku = koleksibuku::findOrFail($id);
    $nomorKoleksi = nomor_koleksibuku::where('koleksibuku_id', $id)->first();

    // Hapus gambar jika ada
    if ($koleksibuku->sampul) {
        Storage::disk('public')->delete($koleksibuku->sampul);
    }

    $koleksibuku->delete();

    return response()->json(['message' => 'Data berhasil dihapus']);
    }
    public function DetailKoleksiAdminBuku($id)
{
    $koleksibuku = koleksibuku::with('nomorkoleksibuku')->findOrFail($id);
    return view('auth.DetailKoleksiAdminBuku',compact('koleksibuku'));
}
public function json(Request $request)
{
    $search = $request->input('search.value');
    $koleksibuku = Koleksibuku::with('nomorkoleksibuku')->select(['id', 'judul', 'pengarang', 'edisi', 'tahun_terbit', 'issn', 'penerbit']);

    if (!empty($search)) {
        $koleksibuku->where('judul', 'like', '%' . $search . '%')
            ->orWhere('pengarang', 'like', '%' . $search . '%')
            ->orWhere('penerbit', 'like', '%' . $search . '%')
            ->orWhere('tahun_terbit', 'like', '%' . $search . '%');
    }

    $index = 1;
    return DataTables::of($koleksibuku)
        ->addColumn('DT_RowIndex', function ($data) use (&$index) {
            return $index++;
        })
        ->addColumn('no_inventaris', function ($row) {
            return $row->nomorkoleksibuku->no_inventaris_buku;
        })
        ->addColumn('action', function ($row) {
            $editUrl = url('dashboardd/koleksibuku/FormBukuEdit/edit/' . $row->id);
            $deleteUrl = url('/dashboardd/koleksibuku/FormDeleteKoleksiBuku/delete/' . $row->id);
            $detailUrl = url('/dashboardd/koleksibuku/DetailKoleksiAdminBuku/' . $row->id);
            return '<a href="' . $editUrl . '">Edit</a> | <a href="#" class="delete-users" data-url="' . $deleteUrl . '">Delete</a> | <a href="' . $detailUrl . '">Detail</a>';
        })
        ->rawColumns(['action'])
        ->toJson();
}


public function printPDF(Request $request)
{
    $search = $request->input('search');
    // dd($search);
    $koleksibuku = koleksibuku::with('nomorkoleksibuku')->select(['id', 'judul', 'pengarang', 'edisi', 'tahun_terbit', 'issn', 'penerbit','tempat_terbit','kualifikasi','bahasa','subjek','abstrak']);

    if (!empty($search)) {
        $koleksibuku->where('judul', 'like', '%' . $search . '%') ->orWhere('pengarang', 'like', "%$search%")
        ->orWhere('penerbit', 'like', "%$search%")
        ->orWhere('tahun_terbit', 'like', "%$search%");
    }

    $koleksibuku = $koleksibuku->get();
    // dd($koleksibuku);
    $pdf = PDF::loadView('auth.PdfView_Buku', ['koleksibuku' => $koleksibuku]);

    return $pdf->stream();
}
    public function search(Request $request)
    {
    $search = $request->get('search');

    $koleksibuku = KoleksiBuku::where('judul', 'like', "%$search%")
                                ->orWhere('pengarang', 'like', "%$search%")
                                ->orWhere('penerbit', 'like', "%$search%")
                                ->orWhere('tahun_terbit', 'like', "%$search%")
                                ->get();

    // Kirim data ke view
    $pdf=Pdf::loadView('auth.PdfView_Buku', compact('koleksibuku'));
    return $pdf->stream();
    }

}
