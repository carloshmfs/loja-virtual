<?php

namespace LojaVirtual\Product\Application\UseCases\Query;

use LojaVirtual\Product\Domain\Repositories\ProductRepository;
use LojaVirtual\Shared\Domain\Query;

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