<?php

namespace App\Http\Controllers;

use App\Models\Koleksi;
use Illuminate\Http\Request;

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
            'asal_ditemukan' => 'required',
            'cara_didapat' => 'required',
            'deskripsi' => 'required',
            'keterangan' => 'required',
            'ukuran' => 'required',
            'tahun_abad_masa' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('uploads', 'public');
            $validatedData['gambar'] = $imagePath;
        }

        Koleksi::create($validatedData);

        return redirect()->back()->with('success', 'Data berhasil disimpan');
    }
}
