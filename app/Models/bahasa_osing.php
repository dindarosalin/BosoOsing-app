<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\bahasa_indonesia;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class bahasa_osing extends Model
{
    use HasFactory;

    protected $table = "bahasa_osings";

    public function bahasa_indonesia(): BelongsToMany
    {
        return $this->belongsToMany(bahasa_indonesia::class, 'transisis', 'id_ind', 'id_os');
    }
}
