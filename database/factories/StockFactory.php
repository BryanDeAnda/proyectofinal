<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\stock;

class StockFactory extends Factory
{
    protected $model = stock::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->word,
            'cantidad' => $this->faker->numberBetween(1, 999),
            'precio' => $this->faker->randomFloat(2, 0, 99999),
        ];
    }
}
