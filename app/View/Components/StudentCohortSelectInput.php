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
    public $user;

    /**
     * Create a new component instance.
     * @param  array  $cohorts
     * @return void
     */
    public function __construct($cohorts, $user)
    {
        $this->cohorts = $cohorts;
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
