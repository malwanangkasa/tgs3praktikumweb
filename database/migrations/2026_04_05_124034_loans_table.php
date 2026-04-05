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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->string('user_npm');

            $table->foreign('user_npm')
            ->references('npm')
            ->on('users')
            ->onDelete('cascade');
            $table->date('loan_at');
            $table->date('return_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function definition()
    {
        return [
            'user_id' => \App\Models\User::inRandomOrder()->first()->id,
            'loan_at' => $this->faker->date(),
            'return_at' => $this->faker->optional()->date(),
        ];
    }
};