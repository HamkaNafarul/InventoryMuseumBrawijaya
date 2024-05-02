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
    $surat = surat::select(['id','nomor_hp','nama','asal_intansi','tanggal','agenda','file']);
    $index = 1;
    return DataTables::of($surat)
        ->addColumn('DT_RowIndex', function ($data) use ($index) {
            return $index++;
        })
        ->addColumn('action', function ($row) {
            $deleteUrl = url('/dashboardd/suratmasuk/FormDeleteSurat/delete/' . $row->id);
            return '<a href="#" class="delete-users" data-url="' . $deleteUrl .'">Delete</a>';
        })        
        ->toJson();
}

    
}
