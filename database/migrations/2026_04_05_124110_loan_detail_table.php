<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('loan_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('loan_id')->constrained()->onDelete('cascade');
            $table->foreignId('book_id')->constrained()->onDelete('cascade');
            $table->boolean('is_return')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function definition()
    {
        return [
            'loan_id' => \App\Models\Loan::inRandomOrder()->first()->id,
            'book_id' => \App\Models\Book::inRandomOrder()->first()->id,
            'is_return' => $this->faker->boolean(),
        ];
    }
};