<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class courseSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('courses')->insert([
            [
                'lecture_id' => 1,
                'code_course' => 'RO101',
                'name_courses' => 'Riset Operasi',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lecture_id' => 2,
                'code_course' => 'BD102',
                'name_courses' => 'Basis Data',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lecture_id' => 3,
                'code_course' => 'SO103',
                'name_courses' => 'Sistem Operasi',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
