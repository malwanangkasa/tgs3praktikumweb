<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends Factory<User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = \Faker\Factory::create('id_ID'); 
    
        static $urutan = 1;
    
        $kodeJurusan = '55201';
        $angkatan = $faker->numberBetween(21, 25);
        $nomor = str_pad($urutan++, 3, '0', STR_PAD_LEFT);
    
        $firstName = $faker->firstName();
        $lastName = $faker->lastName();
    
        return [
            'npm' => $kodeJurusan . $angkatan . $nomor,
    
            'username' => strtolower($firstName . $nomor),
    
            'first_name' => $firstName,
            'last_name' => $lastName,
    
            'email' => strtolower($firstName . $nomor . '@gmail.com'),
    
            'email_verified_at' => now(),
    
            'password' => Hash::make('password'), // default password
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}