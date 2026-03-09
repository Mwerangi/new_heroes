<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Super Admin
        $admin = User::create([
            'name' => 'Super Admin',
            'email' => 'admin@newheroesintl.com',
            'password' => Hash::make('password'),
            'phone' => '+255625544404',
            'is_active' => true,
        ]);
        $admin->assignRole('super-admin');

        // Create Content Manager
        $manager = User::create([
            'name' => 'Content Manager',
            'email' => 'manager@newheroesintl.com',
            'password' => Hash::make('password'),
            'phone' => '+255742058897',
            'is_active' => true,
        ]);
        $manager->assignRole('content-manager');

        // Create Editor
        $editor = User::create([
            'name' => 'Editor',
            'email' => 'editor@newheroesintl.com',
            'password' => Hash::make('password'),
            'is_active' => true,
        ]);
        $editor->assignRole('editor');
    }
}
