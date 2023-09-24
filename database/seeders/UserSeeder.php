<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'manager']);

        $admin = User::factory()->create([
            'email' => "admin@example.com",
            'password' => Hash::make('admin2023')
        ]);
        $manager = User::factory()->create([
            'email' => "manager@example.com",
            'password' => Hash::make('manager2023')
        ]);
        $admin->assignRole('admin');
        $manager->assignRole('admin');

        User::factory()->create([
            'email' => "test@example.com",
            'password' => Hash::make('Test_user25')
        ]);
    }
}
