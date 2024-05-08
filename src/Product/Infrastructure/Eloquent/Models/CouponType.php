<?php

namespace LojaVirtual\Product\Infrastructure\Eloquent\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CouponType extends Model
{
    use HasFactory;

    protected $table = 'coupon_tp';
}
