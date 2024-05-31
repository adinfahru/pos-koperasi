<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Manager',
            'email' => 'manager@gmail.com',
            'role' => 'manager',
            'password' => Hash::make('password'),
        ]);
        
        User::create([
            'name' => 'Fahru',
            'email' => 'fahru@gmail.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Hasbi',
            'email' => 'hasbi@gmail.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Rayhan',
            'email' => 'rayhan@gmail.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Josia',
            'email' => 'josia@gmail.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Aria',
            'email' => 'aria@gmail.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Rama',
            'email' => 'rama@gmail.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Kevin',
            'email' => 'kevin@gmail.com',
            'password' => Hash::make('password'),
        ]);
        
    }
}
