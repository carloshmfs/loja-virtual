<?php

namespace LojaVirtual\Product\Infrastructure\Eloquent;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CouponType extends Model
{
    use HasFactory;

    protected $table = 'coupon_tp';
}
