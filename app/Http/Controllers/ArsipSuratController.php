<?php

namespace App\Http\Controllers;
use App\Models\SuratPeminjaman;
use App\Models\SuratPermohonan;
use App\Models\UndanganRapat;

use Illuminate\Http\Request;

class ArsipSuratController extends Controller
{
    public function index()
    {
        $suratPeminjaman = SuratPeminjaman::all();
        $suratPermohonan = SuratPermohonan::all();
        $undanganRapat = UndanganRapat::all();

        // Gabungkan data ke dalam satu array
        $allSurat = $suratPeminjaman->concat($suratPermohonan)->concat($undanganRapat);

        // Kirim data ke view
        return view('surat.arsip.index', compact('allSurat'));


        // return view('users.kelola.index', compact('users', 'roles'));
        // return view('surat.arsip.index');
    }

    
}