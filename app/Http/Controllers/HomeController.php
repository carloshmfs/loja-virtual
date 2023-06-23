<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request): View
    {
        $data = [
            'products' => Product::paginate(8)
        ];

        return view('home.index', $data);
    }
}
