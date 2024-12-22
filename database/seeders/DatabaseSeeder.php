<?php

namespace Database\Seeders;

use App\Models\Enrollment;
use App\Models\User;
use App\Models\Student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */


    public function run(): void
    {


        // User::factory()->create([
        //     'name' => 'isaw',
        //     'email' => 'isaw@adm.com',
        //     'password' => '12345678',
        //     'token' => 'aasasdasasajjbfsds',
        //     'email_verified_at' => now()
        // ]);

        Enrollment::factory()->create();
        //Student::factory(1)->create();
    }
}
