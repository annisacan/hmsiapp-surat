<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KirimSurat extends Model
{
    use HasFactory;

    protected $table = 'kirim_surats';

    protected $fillable = [
        'nama_surat',
        'pengirim_surat',
        'waktu_kegiatan',
        'nama_kegiatan',
        'deskripsi_surat',
        'upload_surat',
    ];
}
