<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ReturnModel;

class ReturnModelFactory extends Factory
{
    protected $model = ReturnModel::class;

    public function definition()
    {
        return [
            'loan_detail_id' => \App\Models\LoanDetail::inRandomOrder()->first()->id,
            'charge' => $this->faker->boolean(),
            'amount' => $this->faker->numberBetween(0, 50000),
        ];
    }
}