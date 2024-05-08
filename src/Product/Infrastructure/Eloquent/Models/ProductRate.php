<?php

namespace LojaVirtual\Product\Infrastructure\Eloquent\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductRate extends Model
{
    use HasFactory;

    protected $table = 'product_rates';
}