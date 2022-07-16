<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('product_categories');
            $table->foreignId('brand_id')->constrained('brands');
            $table->string('name');
            $table->text('description')->nullable();
            $table->unsignedInteger('stock');
            $table->unsignedInteger('price');
            $table->unsignedInteger('old_price');
            $table->float('rating');
            $table->boolean('featured');
            $table->boolean('sale');
            $table->boolean('best_seller');
            $table->boolean('new_product');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
