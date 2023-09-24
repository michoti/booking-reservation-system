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
        'city_id' => \App\Models\City::inRandomOrder()->first(),
        'name' => fake()->company(),
        'address' => fake()->streetAddress(),
        'state' => fake()->streetName(),
        'country' => fake()->country(),
        'zipcode' => fake()->postcode(),
        'description' => fake()->paragraph(),
        ];
    }
}
