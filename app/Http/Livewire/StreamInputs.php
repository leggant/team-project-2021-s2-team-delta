<?php

namespace App\Http\Livewire;

use Livewire\Component;
use app\Models\User;
use app\Models\Cohort;

class StreamInputs extends Component
{
    public $streampick;
    public $options = ['A', 'B', 'J'];

    public function mount()
    {
        $this->streampick;
    }

    public function hydrate()
    {
        $this->streampick;
    }

    public function render()
    {
        return view('livewire.stream-inputs');
    }
}
