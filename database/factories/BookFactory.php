<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'code' => strtoupper($this->faker->bothify('BK###')),
            'name' => $this->faker->sentence(3),
            'author' => $this->faker->name(),
            'year' => $this->faker->year(),
            'publisher' => $this->faker->company(),
            'city' => $this->faker->city(),
            'cover' => $this->faker->imageUrl(),
            'bookshelf_id' => \App\Models\Bookshelf::inRandomOrder()->first()->id,
            'category_id' => \App\Models\Category::inRandomOrder()->first()->id,
        ];
    }
}