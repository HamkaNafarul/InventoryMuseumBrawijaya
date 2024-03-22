<?php

namespace App\Http\Controllers;

use App\Models\Koleksi;
use Illuminate\Http\Request;

class HomeController extends Controller
//HomeController
{
    public function index()
    {
        return view('index');
    }
    public function koleksi()
    {
        $koleksi = Koleksi::all();
        return view('koleksi',compact('koleksi'));
    }
    public function katalogbuku()
    {
        return view('katalogbuku');
    }
    public function surat()
    {
        return view('surat');
    }
    public function detailkoleksi($id)
    {
        $koleksi = Koleksi::findOrFail($id);
        return view('detailkoleksi',compact('koleksi'));
    }


}
