<?php

namespace App\Shared\Infrastructure\Laravel\Http\Controllers;

use Illuminate\View\View;

class IndexController extends Controller
{
    public function index(): View
    {
        return view('layouts.index');
    }
}
