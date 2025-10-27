<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BussinesSocial extends Model
{
    protected $fillable = [
        'bussine_id',
        'name',
        'url',
    ];

    /**
     * Relación con Bussines
     */
    public function bussine(): BelongsTo
    {
        return $this->belongsTo(Bussines::class);
    }
}
