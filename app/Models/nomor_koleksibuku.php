<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nomor_koleksiBuku extends Model
{
    use HasFactory;
    protected $table = 'nomor_koleksibukus';

    protected $primaryKey = 'id';

    protected $fillable = [
        'no_inventaris_buku',
        'no_registrasi_buku',
        'koleksibuku_id',
    ];

    public function koleksibuku()
    {
        return $this->belongsTo(koleksibuku::class);
    }
}
