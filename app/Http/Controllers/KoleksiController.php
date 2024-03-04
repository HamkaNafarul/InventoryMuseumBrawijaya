<?php

namespace App\Http\Controllers;

use App\Models\Koleksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KoleksiController extends Controller
{
    //
    public function create()
    {
        return view('auth.Form');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'no_inventaris' => 'required|unique:koleksi',
            'nama_barang' => 'required',
            'asal_ditemukan' => 'nullable',
            'cara_didapat' => 'nullable',
            'deskripsi' => 'nullable',
            'keterangan' => 'nullable',
            'ukuran' => 'nullable',
            'tahun_abad_masa' => 'nullable',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('uploads', 'public');
            $validatedData['gambar'] = $imagePath;
        }


        Koleksi::create($validatedData);

        return redirect('dashboardd/koleksipameran')->with('success', 'Data berhasil disimpan');
    }
    public function edit(string $id)
    {
        $koleksi = Koleksi::find($id);
        return view('auth.FormEditKoleksi',compact('koleksi'));
    }
    public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'no_inventaris' => 'required|unique:koleksi,no_inventaris,'.$id,
        'nama_barang' => 'required',
        'asal_ditemukan' => 'nullable',
        'cara_didapat' => 'nullable',
        'deskripsi' => 'nullable',
        'keterangan' => 'nullable',
        'ukuran' => 'nullable',
        'tahun_abad_masa' => 'nullable',
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $koleksi = Koleksi::findOrFail($id);

    // Delete previous image if it exists
    if ($koleksi->gambar) {
        Storage::disk('public')->delete($koleksi->gambar);
    }

    if ($request->hasFile('gambar')) {
        $imagePath = $request->file('gambar')->store('uploads', 'public');
        $validatedData['gambar'] = $imagePath;
    }

    $koleksi->update($validatedData);

    return redirect('dashboardd/koleksipameran')->with('success', 'Data berhasil diperbarui');
}

public function destroy($id)
{
    $koleksi = Koleksi::findOrFail($id);
    
    // Hapus gambar jika ada
    if ($koleksi->gambar) {
        Storage::disk('public')->delete($koleksi->gambar);
    }

    $koleksi->delete();

    return redirect('dashboardd/koleksipameran')->with('success', 'Data berhasil dihapus');
}
public function DetailKoleksiAdmin($id)
{
    $koleksi = Koleksi::findOrFail($id);
    return view('auth.DetailKoleksiAdmin',compact('koleksi'));
}


}
