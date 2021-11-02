<?php

namespace App\Http\Livewire;

use Livewire\Component;
use app\Models\User;
use app\Models\Cohort;

class StreamInputs extends Component
{
    public $streampick;

    public function render()
    {
        return view('livewire.stream-inputs');
    }
}
