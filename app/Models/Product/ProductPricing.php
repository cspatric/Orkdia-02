<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Model;
use App\Models\Products\Product;

class ProductPricing extends Model
{
    protected $table = 'product_pricing';

    protected $fillable = [
        'product_id',
        'cost_price',
        'sale_price',
        'promotional_price',
        'promotion_valid_until',
        'profit_margin',
        'wholesale_price',
        'currency',
    ];

    protected $casts = [
        'promotion_valid_until' => 'datetime',
        'cost_price' => 'float',
        'sale_price' => 'float',
        'promotional_price' => 'float',
        'profit_margin' => 'float',
        'wholesale_price' => 'float',
    ];
}