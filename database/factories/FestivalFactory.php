<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\festival>
 */
class FestivalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' =>fake()->dateTime->format('Y-m-d'),
            'genre' =>fake()->word(),
            'info' => fake()->text(),
            'name' =>fake()->name(),
        ];
    }
}
