<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
        'name' => 'Moahmed Ahl Sbai Mamma',
        'email' => 'mamma.lahmad@example.com',
        'options' => 'Fullstack',
        
    ]);
    }
}
