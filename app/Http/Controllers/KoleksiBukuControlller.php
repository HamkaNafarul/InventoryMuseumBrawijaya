<?php

namespace App\Http\Controllers;

use App\Models\koleksibuku;
use Illuminate\Http\Request;

class KoleksiBukuControlller extends Controller
{
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
}
