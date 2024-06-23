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
    public function nomorkoleksibuku()
    {
        return $this->hasOne(nomor_koleksiBuku::class);
    }
}
