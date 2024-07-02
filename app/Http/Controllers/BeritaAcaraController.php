<?php
// File: app/Http/Controllers/BeritaAcaraController.php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\BeritaAcara;

class BeritaAcaraController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nomor_urut' => 'required',
            'initial_unit' => 'required',
            'judul_berita_acara' => 'required',
            'letter_date' => 'required', 
            'nama_kegiatan' => 'required',
            'nama_pihak_pertama' => 'required',
            'jabatan_pihak_pertama' => 'required',
            'nama_pihak_kedua' => 'required',
            'jabatan_pihak_kedua' => 'required',
            'nama_saksi' => 'required',
            'initial_pimpinan' => 'required',
            'initial_pengetik' => 'required',
            'kode_klasifikasi' => 'required',
        ]);

        // Simpan data ke database
        $beritaAcara = BeritaAcara::create($request->all());

        // Redirect atau tampilkan halaman cetak
        return view('forms.print-berita-acara', ['beritaAcara' => $beritaAcara]);
    }
    
    public function print($id)
    {
        // Ambil data berita acara berdasarkan ID
        $beritaAcara = BeritaAcara::findOrFail($id);

        // Tampilkan halaman cetak dengan data berita acara
        return view('forms.print-berita-acara', ['beritaAcara' => $beritaAcara]);
    }
}
