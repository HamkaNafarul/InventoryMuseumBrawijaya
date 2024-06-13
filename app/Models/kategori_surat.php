<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori_surat extends Model
{
    use HasFactory;
    protected $table = 'kategori_surat';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_kategori_surat',
        
    ];
    public function surat()
    {
        return $this->hasMany(Surat::class, 'kategori_surat_id');
    }
}
