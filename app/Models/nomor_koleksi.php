<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nomor_koleksi extends Model
{
    use HasFactory;
    protected $table = 'nomor_koleksis';

    protected $primaryKey = 'id';

    protected $fillable = [
        'no_inventaris',
        'no_registrasi',
        'koleksi_id',
    ];

    public function koleksi()
    {
        return $this->belongsTo(Koleksi::class);
    }
}
