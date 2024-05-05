<?php

namespace App\Product\Infrastructure\Laravel\Http\Controllers;

use App\Product\Application\UseCases\Query\GetProductsAsPagination;
use App\Product\Domain\Repositories\ProductRepository;
use App\Shared\Infrastructure\Laravel\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\App;

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
