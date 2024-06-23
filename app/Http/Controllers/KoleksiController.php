<?php
namespace App\Http\Controllers;

use App\Models\Koleksi;
use App\Models\nomor_koleksi;
use Illuminate\Http\Request;
use yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

class KoleksiController extends Controller
{
    public function create()
    {
        return view('auth.Form');
    }

    public function pdf(Request $request)
    {
        $search = $request->get('search');
    
        $koleksi = Koleksi::where('asal_ditemukan', 'like', "%$search%")
            ->orWhere('nomorKoleksi.no_inventaris', 'like', "%$search%")
            ->orWhere('nama_barang', 'like', "%$search%")
            ->join('nomor_koleksis', 'koleksi.id', '=', 'nomor_koleksis.koleksi_id')
            ->select('koleksi.*', 'nomor_koleksis.no_inventaris')
            ->get();
    
        $pdf = PDF::loadView('auth.PdfView', compact('koleksi', 'search'));
        return $pdf->stream('laporan_pencarian.pdf');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'no_inventaris' => 'required|unique:nomor_koleksis,no_inventaris',
            'no_registrasi' => 'required|unique:nomor_koleksis,no_registrasi',
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

        $koleksi = Koleksi::create($validatedData);
        nomor_koleksi::create([
            'no_inventaris' => $validatedData['no_inventaris'],
            'no_registrasi' => $validatedData['no_registrasi'],
            'koleksi_id' => $koleksi->id,
        ]);

        return redirect('dashboardd/koleksipameran')->with('success', 'Data berhasil disimpan');
    }

    public function edit(string $id)
    {
        $koleksi = Koleksi::with('nomorKoleksi')->find($id);
        return view('auth.FormEditKoleksi', compact('koleksi'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'no_inventaris' => 'required|unique:nomor_koleksis,no_inventaris,' . $id,
            'no_registrasi' => 'required|unique:nomor_koleksis,no_registrasi,' . $id,
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
        $nomorKoleksi = nomor_koleksi::where('koleksi_id', $id)->first();

       
        // Jika tidak ada sampul baru yang diunggah, gunakan sampul lama
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
        $nomorKoleksi->update([
            'no_inventaris' => $validatedData['no_inventaris'],
            'no_registrasi' => $validatedData['no_registrasi'],
        ]);

        return redirect('dashboardd/koleksipameran')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        $koleksi = Koleksi::findOrFail($id);
        $nomorKoleksi = nomor_koleksi::where('koleksi_id', $id)->first();

        if ($koleksi->gambar) {
            Storage::disk('public')->delete($koleksi->gambar);
        }

        $koleksi->delete();
        $nomorKoleksi->delete();

        return response()->json(['message' => 'Data berhasil dihapus']);
    }

    public function DetailKoleksiAdmin($id)
    {
        $koleksi = Koleksi::with('nomorKoleksi')->findOrFail($id);
        return view('auth.DetailKoleksiAdmin', compact('koleksi'));
    }

    public function json(Request $request)
    {
        $search = $request->input('search.value');
        $koleksi = Koleksi::with('nomorKoleksi')->select(['id', 'nama_barang', 'asal_ditemukan', 'ukuran', 'keterangan']);

        if (!empty($search)) {
            $koleksi = Koleksi::join('nomor_koleksis', 'koleksi.id', '=', 'nomor_koleksis.koleksi_id')
                ->where('koleksi.asal_ditemukan', 'like', "%$search%")
                ->orWhere('nomor_koleksis.no_inventaris', 'like', "%$search%")
                ->orWhere('koleksi.nama_barang', 'like', "%$search%")
                ->select('koleksi.*', 'nomor_koleksis.no_inventaris')
                ->get();
        }

        $index = 1;
        return DataTables::of($koleksi)
            ->addColumn('DT_RowIndex', function ($data) use (&$index) {
                return $index++;
            })
            ->addColumn('no_inventaris', function ($row) {
                return $row->nomorKoleksi->no_inventaris;
            })
            ->addColumn('action', function ($row) {
                $editUrl = url('/dashboardd/koleksipameran/FormEditKoleksi/edit/' . $row->id);
                $deleteUrl = url('/dashboardd/koleksipameran/FormDeleteKoleksi/delete/' . $row->id);
                $detailUrl = url('/dashboardd/koleksipameran/DetailKoleksiAdmin/' . $row->id);
                return '<a href="' . $editUrl . '">Edit</a> | <a href="#" class="delete-users" data-url="' . $deleteUrl . '">Delete</a> | <a href="' . $detailUrl . '">Detail</a>';
            })
            ->toJson();
    }

    public function printPDF(Request $request)
    {
        $search = $request->input('search');
    
        $query = Koleksi::with('nomorKoleksi')->select(['id', 'nama_barang', 'asal_ditemukan', 'ukuran', 'keterangan']);
    
        if (!empty($search)) {
            $query->where(function($query) use ($search) {
                $query->where('asal_ditemukan', 'like', "%$search%")
                      ->orWhereHas('nomorKoleksi', function($query) use ($search) {
                          $query->where('no_inventaris', 'like', "%$search%");
                      })
                      ->orWhere('nama_barang', 'like', "%$search%");
            });
        }
    
        $koleksi = $query->get();
    
        $pdf = PDF::loadView('auth.PdfView', ['koleksi' => $koleksi]);
    
        return $pdf->stream('laporan_pencarian.pdf');
    }
    
    public function search(Request $request)
    {
        $search = $request->get('search');
        $koleksi = Koleksi::with('nomorKoleksi')->where('asal_ditemukan', 'like', "%$search%")
            ->orWhere('nomorKoleksi.no_inventaris', 'like', "%$search%")
            ->orWhere('nama_barang', 'like', "%$search%")
            ->join('nomor_koleksis', 'koleksi.id', '=', 'nomor_koleksis.koleksi_id')
            ->select('koleksi.*', 'nomor_koleksis.no_inventaris')
            ->get();

        $pdf = Pdf::loadView('auth.PdfView', compact('koleksi'));
        return $pdf->stream();
    }
}
