<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuliner extends Model
{
    use HasFactory;
    protected $table = 'kuliners';

    protected $primarykey = 'id';

    protected $fillable = [
        'nama_kuliner',
        'outline',
        'lokasi',
        'artikel',
        'gambar',
    ];
}
