<?php

namespace App\View\Components;

use Illuminate\View\Component;

class StudentCohortSelectInput extends Component
{
    /**
     *
     * @var array
     */
    public $cohorts;

    /**
     * Create a new component instance.
     * @param  array  $cohorts
     * @return void
     */
    public function __construct($cohorts)
    {
        $this->cohorts = $cohorts;
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
