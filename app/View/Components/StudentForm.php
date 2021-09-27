<?php

namespace App\View\Components;

use Illuminate\View\Component;

class StudentForm extends Component
{
    /**
     * The alert message.
     *
     * @var array
     */
    public $students;

    /**
     * Create a new component instance.
     * @param  array  $cohorts
     * @param  array  $students
     * @return void
     */
    public function __construct($students)
    {
        $this->students = $students;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.student-form');
    }
}
