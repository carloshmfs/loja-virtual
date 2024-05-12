<?php

namespace LojaVirtual\Product\Infrastructure\Eloquent\Models;

use Illuminate\Database\Eloquent\Model;
use Database\Factories\ProductCategoryFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use LojaVirtual\Product\Infrastructure\Eloquent\Models\Product;

class ProductCategory extends Model
{
    use HasFactory;

    protected $table = 'product_categories';

    protected static function newFactory()
    {
        return ProductCategoryFactory::new();  
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
