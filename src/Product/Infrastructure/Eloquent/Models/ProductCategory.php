<?php

namespace LojaVirtual\Product\Infrastructure\Eloquent\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductCategory extends Model
{
    use HasFactory;

    protected $table = 'product_categories';

    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
