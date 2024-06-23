<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AjuanDana extends Model
{
    use HasFactory;

    protected $table = 'ajuan_danas';

    protected $fillable = [
        'nama_dana',
        'total_pengeluaran',
        'tanggal_nota',
        'deskripsi_dana',
        'upload_nota'
    ];

    public function getTotalPengeluaranAttribute($value)
    {
        return 'Rp' . number_format($value, 2, ',', '.');
    }
}
