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
            'name' => 'rizu',
            'email' => 'rizu@rizu.com',
            'password' => '12345678',
            'token' => 'aslhjdkahdkahdkjashdha',
            'email_verified_at' => now()
        ]);
    }
}
