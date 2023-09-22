<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Hotel;
use App\Models\Reservation;
use App\Models\Room;
use App\Models\RoomType;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::create(['name' => 'admin']);

        User::factory(3)->create();
        $admin = User::find(1);
        $admin->assignRole('admin');

        Hotel::factory(2)->create();

        RoomType::factory(2)->create();

        Room::factory(10)->create();

        Reservation::factory(5)->create();
    }
}
