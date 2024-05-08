<?php

namespace LojaVirtual\Product\Presentation\Api\Controllers;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\App;
use LojaVirtual\Product\Domain\Repositories\ProductRepository;
use LojaVirtual\Shared\Infrastructure\Laravel\Http\Controllers\Controller;
use LojaVirtual\Product\Application\UseCases\Query\GetProductsAsPagination;

class ProductController extends Controller
{
    public function index(): JsonResponse
    {
        try {
            return response()->json([
                'products' => (new GetProductsAsPagination(App::make(ProductRepository::class)))->handle()
            ]);
        }

        catch (Exception $e) {
            return response()->json($e->getMessage(), 400);
        }
    }
}
