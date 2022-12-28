<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class budaya extends Model
{
    use HasFactory;
    protected $table = 'budayas';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_budaya',
        'outline',
        'lokasi',
        'artikel',
        'gambar',
    ];
}
