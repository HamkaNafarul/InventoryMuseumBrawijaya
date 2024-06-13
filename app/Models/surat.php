<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class surat extends Model
{
    use HasFactory;
    protected $table = 'surat';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nomor_hp',
        'nama',
        'asal_intansi',
        'tanggal',
        'file',
        'status',
        'kategori_surat_id',
    ];

    protected $casts = [
        'file' => 'string',
    ];
    public function kategoriSurat()
    {
        return $this->belongsTo(kategori_surat::class, 'kategori_surat_id');
    }
}
