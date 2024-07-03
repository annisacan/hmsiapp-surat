<?php
// File: app/Models/BeritaAcara.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratPermohonan extends Model
{
    use HasFactory;

    protected $table = 'surat_permohonan';
    protected $fillable = [
        'nomor_urut',
        'tujuan_surat',
        'nama_proker',
        'bulan_surat',
        'lampiran',
        'hal',
        'tanggal_surat',
        'penerima_undangan',
        'alamat_penerima',
        'isi_surat',
        'tanggal_acara',
        'waktu',
        'tempat',
        'nama_pengirim',
        'nim_pengirim',
    ];
}
