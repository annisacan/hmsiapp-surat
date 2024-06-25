<?php
// File: app/Http/Controllers/SuratPeminjamanController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratPeminjaman;

class SuratPeminjamanController extends Controller
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
        $suratPeminjaman = SuratPeminjaman::create($request->all());

        // Redirect atau tampilkan halaman cetak
        return view('forms.print-surat-peminjaman', ['suratPeminjaman' => $suratPeminjaman]);
    }
    
    public function print($id)
    {
        // Ambil data berita acara berdasarkan ID
        $suratPeminjaman = SuratPeminjaman::findOrFail($id);

        // Tampilkan halaman cetak dengan data berita acara
        return view('forms.print-surat-peminjaman', ['suratPeminjaman' => $suratPeminjaman]);
    }
}