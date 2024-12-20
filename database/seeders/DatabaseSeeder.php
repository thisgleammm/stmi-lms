<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */


    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'isaw',
            'email' => 'isaw@rizu.com',
            'password' => '12345678',
            'token' => 'aslhjdkahdkahdkjashdha',
            'id_courses' => 1,
            'email_verified_at' => now()
        ]);
    }
}
