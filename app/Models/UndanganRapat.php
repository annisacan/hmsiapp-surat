<?php
// File: app/Models/Kre.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UndanganRapat extends Model
{
    use HasFactory;

    protected $table = 'undangan_rapat';
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
