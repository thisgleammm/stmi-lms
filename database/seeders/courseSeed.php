<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class courseSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            [
                'lecture_id' => 1,
                'code_course' => 'RO101',
                'name_courses' => 'Riset Operasi',
                'image' => 'risetoperasi.webp',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lecture_id' => 2,
                'code_course' => 'BD101',
                'name_courses' => 'Basis Data',
                'image' => 'basisdata.webp',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lecture_id' => 3,
                'code_course' => 'SO103',
                'name_courses' => 'Sistem Operasi',
                'image' => 'sistemoperasi.webp',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lecture_id' => 4,
                'code_course' => 'AG101',
                'name_courses' => 'Algoritma dan Struktur Data',
                'image' => 'algoritma.webp',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lecture_id' => 5,
                'code_course' => 'DI101',
                'name_courses' => 'Desain Interaksi dan Antar Muka Pengguna',
                'image' => 'desaininteraksi.webp',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lecture_id' => 6,
                'code_course' => 'PB101',
                'name_courses' => 'Pemodelan & Rekayasa Proses Bisnis',
                'image' => 'prosesbisnis.webp',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lecture_id' => 7,
                'code_course' => 'SE101',
                'name_courses' => 'Sistem Enterprise',
                'image' => 'enterprise.webp',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}