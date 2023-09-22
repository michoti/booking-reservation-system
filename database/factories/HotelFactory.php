<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'name' => fake()->company(),
        'address' => fake()->streetAddress(),
        'city' => fake()->city(),
        'state' => fake()->streetName(),
        'country' => fake()->country(),
        'zipcode' => fake()->postcode(),
        'description' => fake()->paragraph(),
        ];
    }
}
