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
    public $user;
    public $papers;
    
    /**
     * Create a new component instance.
     * @param  array  $students
     * @param  array  $papers
     * @param  array  $user
     * @param  array  $cohorts
     * @return void
     */
    public function __construct($students, $cohorts, $user, $papers)
    {
        $this->students = $students;
        $this->cohorts = $cohorts;
        $this->user = $user;
        $this->papers = $papers;
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
