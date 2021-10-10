<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StudentNameDropDown extends Component
{
    public $students;
    public function mount($students) {
        $this->$students = $students;
    }
    public function render()
    {
        return <<<'blade'
        <select id="student" name="student" required
            class="border-gray-300 focus:border-indigo-300 focus:ring 
            focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block lg:col-start-1 lg:col-end-2">
            @foreach ($students as $student)
                <option value={{ $student->id }}>{{ $student->first_name }} {{ $student->last_name }}</option>
            @endforeach
        </select>
blade;
    }
}
