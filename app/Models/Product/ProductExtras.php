<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Model;
use App\Models\Products\Product;

class ProductExtras extends Model
{
    protected $table = 'product_extras';

    protected $fillable = [
        'product_id',
        'keywords',
        'average_review_score',
        'total_sold_quantity',
        'last_sold_at',
        'internal_notes',
    ];

    protected $casts = [
        'keywords' => 'array',
        'average_review_score' => 'float',
        'total_sold_quantity' => 'integer',
        'last_sold_at' => 'datetime',
    ];
}
