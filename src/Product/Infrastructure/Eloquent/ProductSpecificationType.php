<?php

namespace App\Product\Infrastructure\Eloquent;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSpecificationType extends Model
{
    use HasFactory;

    protected $table = 'p_specifications_tp';
}
