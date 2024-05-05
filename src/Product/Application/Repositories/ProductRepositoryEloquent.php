<?php

namespace App\Product\Application\Repositories;

use App\Product\Domain\Repositories\ProductRepository;
use App\Product\Infrastructure\Eloquent\Product;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductRepositoryEloquent implements ProductRepository
{
    public function getPagination(int $perPage = 6): LengthAwarePaginator
    {
        return Product::paginate($perPage);
    }
}