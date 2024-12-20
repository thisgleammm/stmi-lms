<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Student::class;

    public function definition(): array
    {
        $faker = \Faker\Factory::create('id_ID');

        return [
            'user_id' => 2,
            'address' => $faker->address(),
            'phone_number' => $faker->phoneNumber(),
            'date_of_birth' => $faker->date('Y-m-d'),
            'profile_picture' => 'profile.svg'
        ];
    }
}
