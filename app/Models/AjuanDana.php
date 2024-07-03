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
        'upload_nota',
        'status',
        'divisi',
        'original_filename',
        'status',
    ];

    public function getTotalPengeluaranAttribute($value)
    {
        return 'Rp' . number_format($value );
    }

    public function updateBendahara()
    {
        return $this->hasOne(updateBendahara::class, 'ajuan_dana_id');
    }
}
