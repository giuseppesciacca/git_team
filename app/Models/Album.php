<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Album extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'nr_tracks'];

    public function artist(): BelongsTo
    {
        return $this->belongsTo(Album::class);
    }
}