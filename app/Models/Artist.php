<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Album;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'album_id', 'lastname', 'stage_name', 'date_of_birth', 'record_label', 'genre'];

    public function albums(): HasMany      
    {
        return $this->hasMany(Album::class);
    }

}
