<?php

namespace LojaVirtual\Product\Infrastructure\Eloquent\Models;

use Illuminate\Database\Eloquent\Model;
use Database\Factories\ProductImageFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use LojaVirtual\Product\Infrastructure\Eloquent\Models\Product;

class ProductImage extends Model
{
    use HasFactory;

    protected $table = 'product_images';

    protected static function newFactory()
    {
        return ProductImageFactory::new();
    }

    public function products(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
