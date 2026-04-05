<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class ReturnFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'loan_detail_id' => \App\Models\LoanDetail::inRandomOrder()->first()->id,
            'charge' => $this->faker->boolean(),
            'amount' => $this->faker->numberBetween(0, 50000),
        ];
    }
}