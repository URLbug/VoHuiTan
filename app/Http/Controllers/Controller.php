<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function getAll(
        Request $request,
        array $model,
        array|string $columns=['*'],
        int $page=null,
        bool|string $join=true
    ): JsonResponse {
        $all_param = $request->all();

        $limit = $all_param['limit'] ?? 500;
        $dateFrom = $all_param['dateFrom'] ?? null;
        $dateTo = $all_param['dateTo'] ?? null;

        $order = $model[0]::query();

        if($join)
        {
            $order = $order->join('warehouses', function($join){
                $join->on('warehouses_id', '=', 'warehouses.id');
            });
        }

        if(isset($dateFrom))
        {
            $order = $order->where($model[1] . '.created_at', '>=', $dateFrom);
        }

        if(isset($dateTo))
        {
            $order = $order->where($model[1] . '.created_at', '<=', $dateTo);
        }
        
        
        $order = $order->limit($limit)
        ->paginate(
            null,
            $columns,
        )
        ->toArray();

        return response()->json($order['data']); 
    }
}
