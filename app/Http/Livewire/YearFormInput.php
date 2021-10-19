<?php

namespace App\Http\Livewire;

use Livewire\Component;

class YearFormInput extends Component
{
    public $year;
    public $today;
    public $maxYear;
    public function mount() {
        $this->year = date('Y');
        $this->maxYear = $this->year + 3;
        $this->today = date(now());
    }
    public function render()
    {
        $this->year = date('Y');
        $this->maxYear = $this->year + 3;
        return <<<'blade'
        <x-jet-input type="date" name="year" step=365 
            min="{{$this->year}}-01-01" 
            max="{{$this->maxYear}}-01-01" id="year" 
            class="border-gray-300 focus:border-indigo-300 focus:ring 
            focus:ring-indigo-200 focus:ring-opacity-50 
            rounded-md shadow-sm block mt-1">
        </x-jet-input>
        blade;
    }
}
