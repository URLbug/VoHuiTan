<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class Incomes extends Controller
{
    public function index(Request $request): JsonResponse
    {
        return $this->getAll(
            $request,
            [\App\Models\Income::class, 'incomes'],
            [
                'warehouses.price',
                'warehouses.product',
                'incomes.incomes',
                'incomes.created_at',
            ]
        );
    }
}
