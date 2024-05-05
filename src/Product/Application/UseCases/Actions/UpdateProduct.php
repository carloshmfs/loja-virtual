<?php

namespace Product\Application\UseCases\Actions;

use App\Product\Infrastructure\Eloquent\Product;
use Lorisleiva\Actions\Concerns\AsAction;

class UpdateProduct
{
    use AsAction;

    public function handle(Product $product)
    {

    }
}