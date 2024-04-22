<?php

namespace App\Http\Controllers;

use App\Models\tanggal;
use Illuminate\Http\Request;
use yajra\DataTables\DataTables;

class TanggalPenuhController extends Controller
{
    public function create()
    {
        return view('auth.Form_tanggal');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal_penuh' => 'required',
        ]);

        tanggal::create($validatedData);

        return redirect('dashboardd/suratmasuk')->with('success', 'Data berhasil disimpan');
    }
    public function json()
    {
        $tanggal= tanggal::select(['id','tanggal_penuh']);
        $index = 1;
        return DataTables::of($tanggal)
        ->addColumn('DT_RowIndex',function($data) use ($index) {
            return $index++;
        })
        ->addColumn('action', function ($row) {
            $editUrl = url('/' . $row->id);
            $deleteUrl = url('/' . $row->id);
            $detailUrl = url('/' . $row->id);
            return '<a href="' . $editUrl . '">-</a> | <a href="#" class="delete-users" data-url="' . $deleteUrl .'">-</a> | <a href="' . $detailUrl .'">=</a>';
        })
        
        ->toJson();
    }
}
