<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class LoanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_npm' => User::inRandomOrder()->first()->npm,
            'loan_at' => $this->faker->date(),
            'return_at' => $this->faker->optional()->date(),
        ];
    }
}
