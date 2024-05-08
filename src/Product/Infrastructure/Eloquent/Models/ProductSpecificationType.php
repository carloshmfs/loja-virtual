<?php

namespace LojaVirtual\Product\Infrastructure\Eloquent\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductSpecificationType extends Model
{
    use HasFactory;

    protected $table = 'p_specifications_tp';
}
