<?php

namespace Database\Factories;

use App\Quote;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuoteFactory extends Factory
{
    protected $model = Quote::class;

    public function definition()
    {
        return [
            'from' => $this->faker->city,
            'to' => $this->faker->city,
            'description' => $this->faker->text(50),
            'size' => $this->faker->randomFloat(2),
            'weight' => $this->faker->randomFloat(2),
            'eta' => $this->faker->randomDigit,
            'rate' => $this->faker->numberBetween(1000, 10000),
            'advance' => $this->faker->numberBetween(100, 1000),
            'customer_id' => '1',
        ];
    }
}
