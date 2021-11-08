<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => 1,
            'first_name' => 'Jim',
            'last_name' => 'Smith',
            'username' => 'UseThisName',
            'email' => 'johnsmith@gmail.com',
            'github' => 'johnsgit',
            'cohort_id' => 2,
            'is_active' => 1,
        ];

        /*
        return [
            'student_id' => $this->faker->bothify('???######'),
            'first_name' => $this->faker->firstName($gender = null),
            'last_name' => $this->faker->lastName(),
            'username' => $this->faker->userName(),
            'password' => $this->faker->password(),
            'remember_token' => $this->faker->uuid(),
        ];
        */
    }
}
