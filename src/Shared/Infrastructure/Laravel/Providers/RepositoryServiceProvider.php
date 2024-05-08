<?php

namespace LojaVirtual\Shared\Infrastructure\Laravel\Providers;

use LojaVirtual\Product\Application\Repositories\ProductRepositoryEloquent;
use LojaVirtual\Product\Domain\Repositories\ProductRepository;
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
