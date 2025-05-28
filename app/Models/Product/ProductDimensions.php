<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Model;
use App\Models\Products\Product;

class ProductDimensions extends Model
{
    protected $table = 'product_dimensions';

    protected $fillable = [
        'product_id',
        'weight_grams',
        'height_cm',
        'width_cm',
        'depth_cm',
        'unit_of_measurement',
        'volume_cm3',
    ];
}
