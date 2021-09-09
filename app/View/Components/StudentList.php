<?php

namespace App\View\Components;

use Illuminate\View\Component;

class StudentList extends Component
{
    /**
     * The alert message.
     *
     * @var array
     */
    public $students;
    public $cohorts;
    
    /**
     * Create a new component instance.
     * @param  array  $students
     * @return void
     */
    public function __construct($students, $cohorts)
    {
        $this->students = $students;
        $this->cohorts = $cohorts;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.student-list');
    }
}
