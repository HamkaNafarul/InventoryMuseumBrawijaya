<?php

namespace App\Http\Controllers;

use App\Models\Koleksi;
use Illuminate\Http\Request;
use yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

class KoleksiController extends Controller
{
    //
    public function create()
    {
        return view('auth.Form');
    }
    public function pdf()
    {
        $koleksi = Koleksi::all();
        // dd($koleksi);
        $pdf=Pdf::loadView('auth.PdfView', compact('koleksi'));
        return $pdf->stream();
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
        if (!$request->hasFile('gambar')) {
            $validatedData['gambar'] = $koleksi->gambar;
        } else {
            // Hapus gambar lama jika ada gambar baru yang diunggah
            if ($koleksi->gambar) {
                Storage::disk('public')->delete($koleksi->gambar);
            }
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

    return response()->json(['message' => 'Data berhasil dihapus']);
}
public function DetailKoleksiAdmin($id)
{
    $koleksi = Koleksi::findOrFail($id);
    return view('auth.DetailKoleksiAdmin',compact('koleksi'));
}
    // public function json()
    //     {
    //         $koleksi= koleksi::select(['id','no_inventaris','nama_barang','asal_ditemukan','ukuran','keterangan']);
    //         $index = 1;
    //         return DataTables::of($koleksi)
    //         ->addColumn('DT_RowIndex',function($data) use ($index) {
    //             return $index++;
    //         })
    //         ->addColumn('action', function ($row) {
    //             $editUrl = url('/dashboardd/koleksipameran/FormEditKoleksi/edit/' . $row->id);
    //             $deleteUrl = url('/dashboardd/koleksipameran/FormDeleteKoleksi/delete/' . $row->id);
    //             $detailUrl = url('/dashboardd/koleksipameran/DetailKoleksiAdmin/' . $row->id);
    //             return '<a href="' . $editUrl . '">Edit</a> | <a href="#" class="delete-users" data-url="' . $deleteUrl .'">Delete</a> | <a href="' . $detailUrl .'">Detail</a>';
    //         })
            
    //         ->toJson();
    //     }


    public function json()
    {
        $koleksi= koleksi::select(['id','no_inventaris','nama_barang','asal_ditemukan','ukuran','keterangan']);
        $index = 1;
        return DataTables::of($koleksi)
            ->addColumn('DT_RowIndex',function($data) use (&$index) {
                return $index++;
            })
            ->addColumn('action', function ($row) {
                $editUrl = url('/dashboardd/koleksipameran/FormEditKoleksi/edit/' . $row->id);
                $deleteUrl = url('/dashboardd/koleksipameran/FormDeleteKoleksi/delete/' . $row->id);
                $detailUrl = url('/dashboardd/koleksipameran/DetailKoleksiAdmin/' . $row->id);
                return '<a href="' . $editUrl . '">Edit</a> | <a href="#" class="delete-users" data-url="' . $deleteUrl .'">Delete</a> | <a href="' . $detailUrl .'">Detail</a>';
            })
            ->toJson();
    }

}