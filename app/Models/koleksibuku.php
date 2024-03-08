<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class koleksibuku extends Model
{
    use HasFactory;

    protected $table = 'koleksibuku';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nomor',
        'judul',
        'pengarang',
        'edisi',
        'tahun_terbit',
        'issn',
        'penerbit',
        'tempat_terbit',
        'kualifikasi',
        'bahasa',
        'abstrak',
        'subjek',
        'sampul',
    ];

    protected $casts = [
        'sampul' => 'string',
    ];
}
