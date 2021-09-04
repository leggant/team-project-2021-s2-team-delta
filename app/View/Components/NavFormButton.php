<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavFormButton extends Component
{
    /**
     * @var string
     */
    public $action;

    /**
     * Create a new component instance.
     * @param string $action
     * @return void
     */
    public function __construct($action)
    {
        $this->action = $action;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav-form-button');
    }
}
