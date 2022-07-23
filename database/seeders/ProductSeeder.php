<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::factory()
            ->count(64)
            ->for(ProductCategory::factory()->create(), 'category')
            ->for(Brand::factory()->create())
            ->has(ProductImage::factory()->count(3), 'images')
            ->create();
    }
}
