<?php

namespace Database\Factories;

use App\Models\Warehouse;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
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
            'username' => fake()->userName(),
            'warehouses_id' => rand(1, $wars),
        ];
    }
}
