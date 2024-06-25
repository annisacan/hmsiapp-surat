<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class updateBendahara extends Model
{
    use HasFactory;

    protected $table = 'update_bendahara';

    protected $fillable = [
        'ajuan_dana_id', // foreign key ke tabel ajuan_danas
        'bukti_ganti_dana', // path atau nama file bukti ganti dana
        'komentar',
    ];

    // Definisikan relasi ke tabel ajuan_danas
    public function ajuanDana()
    {
        return $this->belongsTo(AjuanDana::class);
    }
}
