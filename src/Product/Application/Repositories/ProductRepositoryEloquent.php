<?php

namespace LojaVirtual\Product\Application\Repositories;

use Illuminate\Pagination\LengthAwarePaginator;
use LojaVirtual\Product\Infrastructure\Eloquent\Product;
use LojaVirtual\Product\Domain\Repositories\ProductRepository;

class ProductRepositoryEloquent implements ProductRepository
{
    public function getPagination(int $perPage = 6): LengthAwarePaginator
    {
        return Product::paginate($perPage);
    }
}