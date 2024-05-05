<?php

namespace App\Product\Domain\Repositories;

use Illuminate\Pagination\LengthAwarePaginator;

interface ProductRepository
{
    public function getPagination(int $perPage = 6): LengthAwarePaginator;
}
