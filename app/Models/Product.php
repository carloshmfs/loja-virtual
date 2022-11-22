<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

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
