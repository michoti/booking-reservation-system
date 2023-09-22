<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $checkInDate = fake()->dateTimeBetween('now', '+30 days');
        $checkOutDate = fake()->dateTimeBetween($checkInDate, '+30 days');

        return [
            'user_id' => \App\Models\User::inRandomOrder()->first(),
            'room_id' => \App\Models\Room::inRandomOrder()->first(),
            'check_in_date' => $checkInDate,
            'check_out_date' => $checkOutDate,
        ];
    }
}
