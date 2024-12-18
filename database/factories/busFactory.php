<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\bus>
 */
class busFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'time_leave' => fake()->time(),
            'time_arrive' => fake()->time(),
            'price' => fake()->randomFloat(),
            'festival_id' => fake()->randomDigitNotZero()
        ];
    }
}
