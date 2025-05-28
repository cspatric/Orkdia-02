<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Model;
use App\Models\Products\Product;

class ProductFiscalData extends Model
{
    protected $table = 'product_fiscal_data';

    protected $fillable = [
        'product_id',
        'ncm_code',
        'cest_code',
        'cfop_code',
        'origin_type',
        'icms_percentage',
        'pis_cofins_percentage',
        'warranty_months',
        'anatel_certified',
    ];

    protected $casts = [
        'icms_percentage' => 'float',
        'pis_cofins_percentage' => 'float',
        'anatel_certified' => 'boolean',
    ];
}