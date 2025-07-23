<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'url_image',
        'url_name_image',
        'url_technical_sheet',
        'url_safety_data_sheet',
        'url_case_studies',
        'tag',
        'category_id',
        'line_id',
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

    /**
     * Get the category associated with the product.
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    /**
     * Get the line associated with the product.
     */
    public function line()
    {
        return $this->belongsTo(Line::class, 'line_id', 'id');
    }

    /**
     * Get the related products.
     */
    public function relatedProducts()
    {
        return $this->belongsToMany(Product::class, 'related_products', 'product_id', 'related_product_id');
    }

    /**
     * Get the additional information associated with the product.
     */
    public function additionalInformationProducts()
    {
        return $this->hasMany(AdditionalInformationProduct::class, 'product_id', 'id');
    }

    

}