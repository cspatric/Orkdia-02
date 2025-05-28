<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Model;
use App\Models\Products\Product;

class ProductInventory extends Model
{
    protected $table = 'product_inventory';

    protected $fillable = [
        'product_id',
        'sku',
        'barcode',
        'internal_code',
        'stock_quantity',
        'stock_minimum',
        'stock_maximum',
        'stock_location',
        'availability_estimate',
        'reserved_stock',
    ];
}