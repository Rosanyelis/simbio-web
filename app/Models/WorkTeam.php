<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WorkTeam extends Model
{
    protected $fillable = [
        'bussine_id',
        'name',
        'position',
        'function',
        'review',
        'projects',
        'url_image',
    ];

    /**
     * Relación con Bussines
     */
    public function bussine(): BelongsTo
    {
        return $this->belongsTo(Bussines::class);
    }
}
