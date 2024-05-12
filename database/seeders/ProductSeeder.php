<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use LojaVirtual\Product\Infrastructure\Eloquent\Models\Brand;
use LojaVirtual\Product\Infrastructure\Eloquent\Models\Product;
use LojaVirtual\Product\Infrastructure\Eloquent\Models\ProductImage;
use LojaVirtual\Product\Infrastructure\Eloquent\Models\ProductCategory;

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
            ->create();
    }
}
