<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class Order extends Controller
{
    public function index(Request $request): JsonResponse
    {
        return $this->getAll(
            $request,
            [\App\Models\Order::class, 'orders'],
            [
                'warehouses.price',
                'warehouses.product',
                'orders.username',
                'orders.created_at',
            ]
        );
    }
}
