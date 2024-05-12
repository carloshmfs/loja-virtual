<?php

namespace LojaVirtual\Product\Infrastructure\Eloquent\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use LojaVirtual\Product\Infrastructure\Eloquent\Models\Product;

class Brand extends Model
{
    use HasFactory;

    protected $table = 'brands';

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
