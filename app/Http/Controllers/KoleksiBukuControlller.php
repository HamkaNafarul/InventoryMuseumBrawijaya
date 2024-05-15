<?php

namespace App\Http\Controllers;

use App\Models\koleksibuku;
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
                                ->get();

    $pdf = PDF::loadView('auth.PdfView_Buku', compact('koleksiBuku','search'));
    return $pdf->stream('laporan_pencarian.pdf');
}

    // public function pdf()
    // {
    //     $koleksibuku = koleksibuku::all();
    //     $pdf=Pdf::loadView('auth.PdfView_Buku', compact('koleksibuku'));
    //     return $pdf->stream();
    // }

    public function create()
    {
        return view('auth.FormBuku');
    }
    public function store (Request $request)
    {
        $validatedData = $request->validate([
            'nomor' => 'required|unique:koleksibuku',
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


        koleksibuku::create($validatedData);

        return redirect('dashboardd/koleksibuku')->with('success', 'Data berhasil disimpan');
    }
    public function edit(string $id)
    {
        $koleksibuku = koleksibuku::find($id);
        return view('auth.FormBukuEdit',compact('koleksibuku'));
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nomor' => 'required|unique:koleksibuku,nomor,'.$id,
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

    return redirect('dashboardd/koleksibuku')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
    $koleksibuku = koleksibuku::findOrFail($id);
    
    // Hapus gambar jika ada
    if ($koleksibuku->sampul) {
        Storage::disk('public')->delete($koleksibuku->sampul);
    }

    $koleksibuku->delete();

    return response()->json(['message' => 'Data berhasil dihapus']);
    }
    public function DetailKoleksiAdminBuku($id)
{
    $koleksibuku = koleksibuku::findOrFail($id);
    return view('auth.DetailKoleksiAdminBuku',compact('koleksibuku'));
}

    public function json(Request $request)
{
    $search = $request->input('search.value');
    $koleksibuku = koleksibuku::select(['id', 'nomor', 'judul', 'pengarang', 'edisi', 'tahun_terbit', 'issn', 'penerbit']);

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
    $koleksibuku = koleksibuku::select(['id', 'nomor', 'judul', 'pengarang', 'edisi', 'tahun_terbit', 'issn', 'penerbit','tempat_terbit','kualifikasi','bahasa','subjek',]);

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
