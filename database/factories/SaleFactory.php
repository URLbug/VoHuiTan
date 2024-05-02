<?php

namespace Database\Factories;

use App\Models\Warehouse;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $wars = count(Warehouse::all(['id'])->toArray());
        
        return [
            'warehouses_id' => rand(1, $wars),
            'amount' => rand(100, 1000),
            'order' => rand(10, 100),
        ];
    }
}
