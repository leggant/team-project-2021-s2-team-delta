<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewStudentFactory extends Factory
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
            'student_id' => 1,
            'first_name' => 'Jim',
            'last_name' => 'Smith',
            'username' => 'UseThisName',
            'email' => 'johnsmith@gmail.com',
            'github' => 'johnsgit',
            'cohort_id' => 1,
            'is_active' => 1
        ];
    }
}
