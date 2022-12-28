<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;
    protected $primarykey = 'id';
    protected $fillable = [
        'nama_wisata',
        'outline',
        'lokasi',
        'artikel',
        'gambar',
    ];
}
