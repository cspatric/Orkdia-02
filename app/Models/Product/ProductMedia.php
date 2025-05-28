<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Model;
use App\Models\Products\Product;

class ProductMedia extends Model
{
    protected $table = 'product_media';

    protected $fillable = [
        'product_id',
        'main_image',
        'additional_images',
        'video_url',
    ];

    protected $casts = [
        'additional_images' => 'array',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}