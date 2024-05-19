<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'name' => 'Rohit Pal',
            'email' => 'rohit@yopmail.com',
            'password' => \Hash::make('Rohit@8866'),
            'email_verified_at' => now(),
        ]);
    }
}
