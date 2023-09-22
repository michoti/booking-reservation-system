<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'hotel_id' => \App\Models\Hotel::inRandomOrder()->first(),
            'room_type_id' => \App\Models\RoomType::inRandomOrder()->first(),
            'number' => fake()->unique()->numerify('Room ###'),
        ];
    }
}
