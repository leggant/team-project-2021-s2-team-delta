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
    public $cohorts;
    public $students;
    public $user;
    public $papers;

    /**
     * Create a new component instance.
     * @param  array  $cohorts
     * @param  array  $papers
     * @param  array  $students
     * @param  array  $user
     * @return void
     */
    public function __construct($cohorts, $students, $papers, $user)
    {
        $this->cohorts = $cohorts;
        $this->students = $students;
        $this->papers = $papers;
        $this->user = $user;
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
