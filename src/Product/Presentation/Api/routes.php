<?php

use Illuminate\Support\Facades\Route;
use LojaVirtual\Product\Presentation\Api\Controllers\ProductController;

Route::resource('products', ProductController::class)->names('product');
