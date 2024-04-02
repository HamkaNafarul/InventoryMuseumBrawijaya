<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tanggal extends Model
{
    use HasFactory;
    protected $table = 'tanggal';

    protected $primaryKey = 'id';

    protected $fillable = [
        'tanggal_penuh',
    ];
}
