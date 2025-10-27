<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuccessStory extends Model
{
    protected $fillable = [
        'name',
        'subtitle',
        'slug',
        'description',
        'url_image',
        'url_file',
    ];

    /**
     * Generate slug automatically when creating or updating the model.
     */
    protected static function booted(): void
    {
        parent::boot();

        static::creating(function ($model) {
            $model->slug = \Str::slug($model->name);
        });

        static::updating(function ($model) {
            $model->slug = \Str::slug($model->name);
        });
    }
}
