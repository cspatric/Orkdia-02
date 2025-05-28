<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

use App\Models\Products\ProductMedia;
use App\Models\Products\ProductPricing;
use App\Models\Products\ProductDimensions;
use App\Models\Products\ProductInventory;
use App\Models\Products\ProductRelationships;
use App\Models\Products\ProductFiscalData;
use App\Models\Products\ProductExtras;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name',
        'short_description',
        'detailed_description',
        'condition',
        'is_active',
        'is_featured',
        'brand',
        'category_id',
        'subcategory_id',
        'manufacturer',
        'model',
        'color',
        'gender',
        'collection',
        'average_rating',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_featured' => 'boolean',
        'average_rating' => 'float',
    ];

    public function media(): HasOne
    {
        return $this->hasOne(ProductMedia::class);
    }

    public function pricing(): HasOne
    {
        return $this->hasOne(ProductPricing::class);
    }

    public function dimensions(): HasOne
    {
        return $this->hasOne(ProductDimensions::class);
    }

    public function inventory(): HasOne
    {
        return $this->hasOne(ProductInventory::class);
    }

    public function relationships(): HasOne
    {
        return $this->hasOne(ProductRelationships::class);
    }

    public function fiscalData(): HasOne
    {
        return $this->hasOne(ProductFiscalData::class);
    }

    public function extras(): HasOne
    {
        return $this->hasOne(ProductExtras::class);
    }
}
