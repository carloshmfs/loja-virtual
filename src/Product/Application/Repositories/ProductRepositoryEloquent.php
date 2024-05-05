<?php

namespace App\Product\Application\Repositories;

use Illuminate\Pagination\LengthAwarePaginator;
use App\Product\Infrastructure\Eloquent\Product;
use App\Product\Domain\Repositories\ProductRepository;

class ProductRepositoryEloquent implements ProductRepository
{
    public function getPagination(int $perPage = 6): LengthAwarePaginator
    {
        return Product::paginate($perPage);
    }
}