<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class Sales extends Controller
{
    public function index(Request $request): JsonResponse
    {
        return $this->getAll(
            $request,
            [\App\Models\Sale::class, 'sales'],
            [
                'warehouses.price',
                'warehouses.product',
                'sales.amount',
                'sales.order',
                'sales.created_at',
            ]
        );
    }
}
