<?php

namespace App\Product\Infrastructure\Laravel\Http\Controllers;

use App\Shared\Infrastructure\Laravel\Http\Controllers\Controller;
use App\Product\Infrastructure\Eloquent\Product;
use Illuminate\Http\JsonResponse;

class ProductController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json([
            'products' => Product::with(['category', 'brand', 'images'])->get()
        ]);
    }
}
