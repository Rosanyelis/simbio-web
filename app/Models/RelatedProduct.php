<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RelatedProduct extends Model
{
    protected $fillable = [
        'product_id',
        'related_product_id',
    ];

    /**
     * Get the product associated with the related product.
     */
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    /**
     * Get the related product.
     */
    public function relatedProduct()
    {
        return $this->belongsTo(Product::class, 'related_product_id', 'id');
    }
}
