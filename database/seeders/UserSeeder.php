<?php

namespace Database\Seeders;

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
        User::create([
            'email' => 'adminAdemin@gmail.com',
            'password' => Hash::make('ademinaja'),
            'name' => 'Admin LMS',
            'level' => 'admin',
            'token' => str(random_int(1000, 9999))
        ]);
    }
}


