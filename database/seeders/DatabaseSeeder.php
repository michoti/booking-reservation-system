<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Hotel;
use App\Models\Reservation;
use App\Models\Room;
use App\Models\RoomType;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::create(['name' => 'admin']);

        $admin = User::factory()->create([
            'email' => "admin@example.com",
            'password' => Hash::make('Super_admin25')
        ]);
        $admin->assignRole('admin');
        User::factory()->create([
            'email' => "test@example.com",
            'password' => Hash::make('Test_user25')
        ]);

        Hotel::factory(2)->create();

        RoomType::factory(2)->create();

        Room::factory(10)->create();

        Reservation::factory(5)->create();
    }
}
