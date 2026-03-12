<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Admin User only if it doesn't exist
        if (!User::where('email', 'admin@gmail.com')->exists()) {
            User::create([
                'nom' => 'Admin',
                'prenom' => 'First',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('Admin123'),
                'status' => 'offline',
                'type' => 'admin',
                'langue_parlee' => 'francais',
                'langue_apprendre' => 'goun',
            ]);
        }
    }
}
