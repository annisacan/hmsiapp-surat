<?php
// File: app/Models/BeritaAcara.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaAcara extends Model
{
    use HasFactory;

    protected $table = 'berita_acara';
    protected $fillable = [
        'nomor_urut',
        'initial_unit',
        'judul_berita_acara',
        'letter_date',
        'nama_kegiatan',
        'nama_pihak_pertama',
        'jabatan_pihak_pertama',
        'nama_pihak_kedua',
        'jabatan_pihak_kedua',
        'nama_saksi',
        'initial_pimpinan',
        'initial_pengetik',
        'kode_klasifikasi',
    ];
}
