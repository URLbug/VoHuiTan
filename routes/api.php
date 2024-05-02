<?php

use App\Http\Controllers\Incomes;
use App\Http\Controllers\Order;
use App\Http\Controllers\Sales;
use App\Http\Controllers\Warehouses;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth.api')->get(
    '/orders', 
    [Order::class, 'index',]
)->name('orders');

Route::middleware('auth.api')->get(
    '/sales', 
    [Sales::class, 'index',]
)->name('sales');

Route::middleware('auth.api')->get(
    '/incomes', 
    [Incomes::class, 'index',]
)->name('incomes');

Route::middleware('auth.api')->get(
    '/stocks', 
    [Warehouses::class, 'index',]
)->name('stocks');

