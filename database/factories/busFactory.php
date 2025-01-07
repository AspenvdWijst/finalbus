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
            'time_leave' => $this->faker->randomElement(['10:00:00', '10:30:00', '09:30:00']),
            'time_arrive' => $this->faker->randomElement(['11:00:00', '11:30:00', '12:00:00']),
            'price' => $this->faker->randomFloat(2, 3, 15),
            'festival_id' => fake()->randomDigitNotZero()
        ];
    }
}
