<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bussines extends Model
{
    protected $fillable = [
        'name',
        'url_image',
        'history',
        'email',
        'phone',
        'address',
    ];

    /**
     * Relación con BussinesSocial
     */
    public function bussinesSocials(): HasMany
    {
        return $this->hasMany(BussinesSocial::class, 'bussine_id');
    }

    /**
     * Relación con WorkTeam
     */
    public function workTeams(): HasMany
    {
        return $this->hasMany(WorkTeam::class, 'bussine_id');
    }
}
