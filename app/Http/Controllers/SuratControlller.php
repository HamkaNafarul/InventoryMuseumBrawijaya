<?php

namespace App\Http\Controllers;

use App\Models\surat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class SuratControlller extends Controller
{
    //
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

        return response()->json(['message' => 'Data berhasil disimpan'], 200);
    }
    public function destroy($id)
    {
        $surat = Surat::findOrFail($id);
        
        // Hapus file jika ada
        if ($surat->file_path) {
            Storage::disk('public')->delete($surat->file_path);
        }
    
        $surat->delete();
    
        return response()->json(['message' => 'Data berhasil dihapus']);
    }
    public function json()
    {
        $surat = surat::select(['id','nomor_hp','nama','asal_intansi','tanggal','agenda','file','status']);
        // dd($surat);
        $index = 1;
        return DataTables::of($surat)
            ->addColumn('DT_RowIndex', function ($data) use (&$index) {
                return $index++;
            })
            ->addColumn('action', function ($row) {
                $deleteUrl = url('/dashboardd/suratmasuk/FormDeleteSurat/delete/' . $row->id);
                return '<a href="#" class="delete-users" data-url="' . $deleteUrl .'">Delete</a>';
            })  
           
            ->toJson();
    }
    public function jsonstatus()
{
    $surat = surat::select(['nama','asal_intansi','tanggal','status']);
    return DataTables::of($surat)->make(true);
}

    public function acc($id)
    {
    $surat = surat::find($id);
    if (!$surat) {
        return response()->json(['error' => 'Surat tidak ditemukan'], 404);
    }

    $surat->status = 1;
    $surat->save();

    return response()->json(['message' => 'Surat berhasil diterima'], 200);
}

    

    
}
