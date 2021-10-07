<?php

namespace App\View\Components;

use Illuminate\View\Component;

class StudentCohortSelectInput extends Component
{
    /**
     *
     * @var array
     */
    public $papers;
    public $user;
    public $cohorts;

    /**
     * Create a new component instance.
     * @param  array  $cohorts
     * @param  array  $papers
     * @param  array  $user
     * @return void
     */
    public function __construct($papers, $user, $cohorts)
    {
        $this->cohorts = $cohorts;
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
        return view('components.student-cohort-select-input');
    }
}
