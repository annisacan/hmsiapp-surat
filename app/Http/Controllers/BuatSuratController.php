<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuatSuratController extends Controller
{
    public function index()
    {
        return view('surat.keluar.buat-surat');
    }
}