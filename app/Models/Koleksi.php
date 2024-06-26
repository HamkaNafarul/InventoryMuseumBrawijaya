<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Koleksi extends Model
{
    use HasFactory;

    protected $table = 'koleksi';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_barang',
        'asal_ditemukan',
        'cara_didapat',
        'deskripsi',
        'keterangan',
        'ukuran',
        'tahun_abad_masa',
        'gambar',
    ];

    protected $casts = [
        'gambar' => 'string',
    ];

    public function nomorKoleksi()
    {
        return $this->hasOne(nomor_koleksi::class);
    }
}

