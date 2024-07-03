<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestSurat extends Model
{
    use HasFactory;

    // Nama tabel di database, jika tidak sesuai dengan plural default
    protected $table = 'request_surats';

    // Kolom-kolom yang dapat diisi melalui mass assignment
    protected $fillable = [
        'nama_surat',
        'priority',
        'tanggal_request',
        'deskripsi_surat',
        'tipe_surat',
        'penerima_surat',
        'status',
        'upload_surat',
    ];
}
