<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Model;
use App\Models\Products\Product;

class ProductRelationships extends Model
{
    protected $table = 'product_relationships';

    protected $fillable = [
        'product_id',
        'related_products',
        'variations',
        'bundled_products',
        'tags',
    ];

    protected $casts = [
        'related_products' => 'array',
        'variations' => 'array',
        'bundled_products' => 'array',
        'tags' => 'array',
    ];
}