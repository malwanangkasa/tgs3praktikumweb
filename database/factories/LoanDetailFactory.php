<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\Loan;
use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class LoanDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $table = 'loan_details';
    public function definition()
    {
        return [
            'loan_id' => \App\Models\Loan::inRandomOrder()->first()->id,
            'book_id' => \App\Models\Book::inRandomOrder()->first()->id,
            'is_return' => $this->faker->boolean(),
        ];
    }
}
