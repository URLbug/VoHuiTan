<?php

namespace Database\Factories;

use App\Models\Sale;
use App\Models\Warehouse;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Income>
 */
class IncomeFactory extends Factory
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
            'incomes' => rand(1000, 9999),
        ];
    }
}
