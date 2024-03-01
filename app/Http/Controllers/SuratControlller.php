<?php

namespace App\Http\Controllers;

use App\Models\surat;
use Illuminate\Http\Request;

class SuratControlller extends Controller
{
    //
    public function store(Request $request)
    {
        $validatedData = $request->validate([
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

        surat::create($validatedData);

        return redirect('/surat')->with('success', 'Data berhasil disimpan');
    }
}
