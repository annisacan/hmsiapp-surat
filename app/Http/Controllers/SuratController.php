<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratController extends Controller
{
    public function index()
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }
        
        return view('surat.kelola.index');
    }

    public function suratmasuksekre()
    {
        return view('surat.masuk.index');
    }

    public function suratkeluarsekre()
    {
        return view('surat.keluar.index');
    }

    


}
