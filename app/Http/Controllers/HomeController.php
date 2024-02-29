<?php

namespace App\Http\Controllers;

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
        return view('koleksi');
    }
    public function katalogbuku()
    {
        return view('katalogbuku');
    }
    public function surat()
    {
        return view('surat');
    }
    public function detailkoleksi()
    {
        return view('detailkoleksi');
    }


}
