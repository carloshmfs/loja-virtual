<?php

namespace App\Product\Application\UseCases\Query;

use App\Product\Domain\Repositories\ProductRepository;
use App\Shared\Domain\Query;

class GetProductsAsPagination implements Query
{
    public function __construct(private ProductRepository $repository)
    {
    }   

    public function handle(): array
    {
        return $this->repository->getPagination()->toArray();
    }
}