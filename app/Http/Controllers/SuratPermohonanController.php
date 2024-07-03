<?php
// File: app/Http/Controllers/BeritaAcaraController.php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\SuratPermohonan;

class SuratPermohonanController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nomor_urut' => 'required',
            'tujuan_surat' => 'required',
            'nama_proker' => 'required',
            'bulan_surat' => 'required',
            'lampiran' => 'required',
            'hal' => 'required',
            'tanggal_surat' => 'required',
            'penerima_undangan' => 'required',
            'alamat_penerima' => 'required',
            'isi_surat' => 'required',
            'tanggal_acara' => 'required',
            'waktu' => 'required',
            'tempat' => 'required',
            'nama_pengirim' => 'required',
            'nim_pengirim' => 'required',
        ]);

        // Simpan data ke database
        $suratPermohonan = SuratPermohonan::create($request->all());

        // Redirect atau tampilkan halaman cetak
        return view('forms.print-surat-permohonan', ['suratPermohonan' => $suratPermohonan]);
    }
    
    public function print($id)
    {
        // Ambil data surat permohonan berdasarkan ID
        $suratPermohonan = SuratPermohonan::findOrFail($id);

        // Tampilkan halaman cetak dengan data surat permohonan
        return view('forms.print-surat-permohonan', ['suratPermohonan' => $suratPermohonan]);
    }
}
