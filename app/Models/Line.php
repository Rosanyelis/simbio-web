<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Line extends Model
{
    protected $fillable = ['name', 'slug'];

    /**
     * Get the products associated with the line.
     */
    public function products()
    {
        return $this->hasMany(Product::class, 'line_id', 'id');
    }

    /**
     * Generate slug automatically when creating or updating the model.
     */
    protected static function boot()
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
