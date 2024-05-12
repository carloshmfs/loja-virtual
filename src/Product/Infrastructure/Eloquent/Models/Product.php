<?php

namespace LojaVirtual\Product\Infrastructure\Eloquent\Models;

use Carbon\Carbon;
use Database\Factories\ProductFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use LojaVirtual\Product\Infrastructure\Eloquent\Models\Brand;
use LojaVirtual\Product\Infrastructure\Eloquent\Models\ProductImage;
use LojaVirtual\Product\Infrastructure\Eloquent\Models\ProductCategory;
use LojaVirtual\Product\Infrastructure\Eloquent\Collections\ProductCollection;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected static function newFactory(): ProductFactory
    {
        return ProductFactory::new();  
    }
 
    public function newCollection(array $models = []): ProductCollection
    {
        return new ProductCollection($models);
    }

    protected function price(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => 'R$ '. number_format($value / 100, 2, ',', '.'),
        );
    }

    protected function oldPrice(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => 'R$ '. number_format($value / 100, 2, ',', '.'),
        );
    }

    protected function createdAt(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => new Carbon($value),
        );
    }

    protected function updatedAt(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => new Carbon($value),
        );
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(ProductImage::class, 'product_id');
    }
}
