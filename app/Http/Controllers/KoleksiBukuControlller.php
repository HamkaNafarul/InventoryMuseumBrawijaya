<?php

namespace App\Http\Controllers;

use App\Models\koleksibuku;
use Illuminate\Http\Request;
use yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;

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
    
        $koleksibuku = koleksibuku::findOrFail($id);
    
        // Delete previous image if it exists
        if ($koleksibuku->sampul) {
            Storage::disk('public')->delete($koleksibuku->sampul);
        }
    
        if ($request->hasFile('sampul')) {
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
    public function json()
    {
        $koleksibuku= koleksibuku::select(['id','nomor','judul','pengarang','edisi','tahun_terbit','issn','penerbit']);
        $index=1;
        return DataTables::of($koleksibuku)
        ->addColumn('DT_RowIndex',function($data) use ($index) {
            return $index++;
        })
        ->addColumn('action', function ($row) {
            $editUrl = url('dashboardd/koleksibuku/FormBukuEdit/edit/' . $row->id);
            $deleteUrl = url('/dashboardd/koleksibuku/FormDeleteKoleksiBuku/delete/' . $row->id);
            return '<a href="' . $editUrl . '">Edit</a> | <a href="#" class="delete-users" data-url="' . $deleteUrl .'">Delete</a>';
        })        
        
        ->toJson();
    }
}
