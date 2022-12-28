<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\bahasa_osing;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class bahasa_indonesia extends Model
{
    use HasFactory;

    protected $table = "bahasa_indonesias";

    public function bahasa_osing(): BelongsToMany
    {
        return $this->belongsToMany(bahasa_osing::class, 'transisis', 'id_ind', 'id_os');
    }
}
