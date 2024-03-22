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

        return redirect('/surat')->with('success', 'Data berhasil disimpan');
    }
    public function destroy($id)
    {
        $surat = Surat::findOrFail($id);
        
        // Hapus file jika ada
        if ($surat->file_path) {
            Storage::disk('public')->delete($surat->file_path);
        }
    
        $surat->delete();
    
        return redirect('dashboardd/suratmasuk')->with('success', 'Data berhasil dihapus');

    }
    public function json()
    {
        $surat= surat::select(['id','nomor_hp','nama','asal_intansi','tanggal','agenda']);
        $index=1;
        return DataTables::of($surat)
        ->addColumn('DT_RowIndex',function($data) use ($index) {
            return $index++;
        })
        // ->addColumn('action', function ($row) {
        //     $editUrl = url('/dashboardd/koleksipameran/FormEditKoleksi/edit/' . $row->id);
        //     $deleteUrl = url('/dashboardd/koleksipameran/FormDeleteKoleksi/delete/' . $row->id);
        //     $detailUrl = url('/dashboardd/koleksipameran/DetailKoleksiAdmin/' . $row->id);
        //     return '<a href="' . $editUrl . '">Edit</a> | <a href="#" class="delete-users" data-url="' . $deleteUrl .'">Delete</a> | <a href="' . $detailUrl .'">Detail</a>';
        // })
        
        ->toJson();
    }
    
}
