<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Products\ProductMedia;
use App\Models\Products\ProductPricing;
use App\Models\Products\ProductDimensions;
use App\Models\Products\ProductInventory;
use App\Models\Products\ProductRelationships;
use App\Models\Products\ProductFiscalData;
use App\Models\Products\ProductExtras;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('short_description')->nullable();
            $table->text('detailed_description');
            $table->enum('condition', ['new', 'used', 'refurbished']);
            $table->boolean('is_active')->default(true);
            $table->boolean('is_featured')->default(false);
            $table->string('brand');
            $table->uuid('category_id');
            $table->uuid('subcategory_id')->nullable();
            $table->string('manufacturer')->nullable();
            $table->string('model')->nullable();
            $table->string('color')->nullable();
            $table->enum('gender', ['male', 'female', 'unisex'])->nullable();
            $table->string('collection')->nullable();
            $table->float('average_rating')->nullable();

            $table->string('main_image');
            $table->json('additional_images')->nullable();
            $table->string('video_url')->nullable();

            $table->float('cost_price');
            $table->float('sale_price');
            $table->float('promotional_price')->nullable();
            $table->dateTime('promotion_valid_until')->nullable();
            $table->float('profit_margin')->nullable();
            $table->float('wholesale_price')->nullable();
            $table->string('currency');

            $table->float('weight_grams');
            $table->float('height_cm');
            $table->float('width_cm');
            $table->float('depth_cm');
            $table->string('unit_of_measurement');
            $table->float('volume_cm3')->nullable();

            $table->string('sku');
            $table->string('barcode')->nullable();
            $table->string('internal_code')->nullable();
            $table->integer('stock_quantity');
            $table->integer('stock_minimum')->nullable();
            $table->integer('stock_maximum')->nullable();
            $table->string('stock_location')->nullable();
            $table->string('availability_estimate');
            $table->integer('reserved_stock')->nullable();

            $table->json('related_products')->nullable();
            $table->json('variations')->nullable();
            $table->json('bundled_products')->nullable();
            $table->json('tags')->nullable();

            $table->string('ncm_code');
            $table->string('cest_code')->nullable();
            $table->string('cfop_code')->nullable();
            $table->enum('origin_type', ['domestic', 'imported'])->nullable();
            $table->float('icms_percentage')->nullable();
            $table->float('pis_cofins_percentage')->nullable();
            $table->integer('warranty_months')->nullable();
            $table->boolean('anatel_certified')->default(false);

            $table->json('keywords')->nullable();
            $table->float('average_review_score')->nullable();
            $table->integer('total_sold_quantity')->nullable();
            $table->dateTime('last_sold_at')->nullable();
            $table->text('internal_notes')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
