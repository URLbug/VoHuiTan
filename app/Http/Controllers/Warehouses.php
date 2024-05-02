<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class Warehouses extends Controller
{
    public function index(Request $request): JsonResponse
    {
        return $this->getAll(
            $request,
            [\App\Models\Warehouse::class, 'warehouses'],
            ['*'],
            null,
            false
        );
    }
}
