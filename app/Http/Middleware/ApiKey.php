<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ApiKey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $key = $request->all()['key'] ?? null;

        if(!isset($key))
        {
            abort(403);
        }
        
        $isKey = User::where('key', '=', $key)
        ->get()
        ->toArray();

        if(empty($isKey))
        {
            abort(403);
        }

        return $next($request);
    }
}
