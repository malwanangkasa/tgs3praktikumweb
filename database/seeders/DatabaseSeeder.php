<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run()
    {
        \App\Models\Category::factory(10)->create();
        \App\Models\Bookshelf::factory(10)->create();

        \App\Models\User::factory(50)->create();
        \App\Models\Book::factory(50)->create();
        \App\Models\Loan::factory(30)->create();

        \App\Models\Loan::factory(50)->create();
        \App\Models\LoanDetail::factory(50)->create();
        \App\Models\ReturnModel::factory(50)->create();
    }
}
