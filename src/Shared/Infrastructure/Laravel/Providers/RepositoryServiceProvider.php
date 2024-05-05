<?php

namespace App\Shared\Infrastructure\Laravel\Providers;

use App\Product\Application\Repositories\ProductRepositoryEloquent;
use App\Product\Domain\Repositories\ProductRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public $bindings = [
        //...
    ];

    public $singletons = [
        ProductRepository::class => ProductRepositoryEloquent::class
    ];

    public function register(): void
    {
        //...
    }

    public function boot(): void
    {
        //...
    }
}
