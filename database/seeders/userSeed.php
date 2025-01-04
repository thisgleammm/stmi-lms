<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Dev Mahasiswa',
                'email' => 'devm@adm.com',
                'password' => Hash::make('12345678'),
                'level' => 'mahasiswa',
                'phone_number' => '08123456789',
                'token' => 'token1',
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Dev Admin',
                'email' => 'deva@adm.com',
                'password' => Hash::make('12345678'),
                'level' => 'admin',
                'phone_number' => '08123456789',
                'token' => 'token2',
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Dev Dosen',
                'email' => 'devd@adm.com',
                'password' => Hash::make('12345678'),
                'level' => 'dosen',
                'phone_number' => '08123456789',
                'token' => 'token3',
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}