<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;
use App\Models\Cohort;
use App\Models\User;

class SearchStudent extends Component
{
    public $query = '';
    public $searchFields = ['first_name', 'last_name', 'email', 'github'];
    public $labels = ['First Name', 'Last Name', 'Email', 'Github'];
    public $searchField = 1;
    public $sortBy = '';

    // does the initial search
    public function render()
    {
        $students = Student::where($this->searchFields[$this->searchField], 'like', '%' . $this->query)->get();
        return view('livewire.search-student', [
            'students' => $students
        ]);
    }

    // updates the search results each time the input filter changes
    public function hydrate() {
        $students = Student::where($this->searchFields[$this->searchField], 'like', '%' . $this->query)->get();
        return view('livewire.search-student', [
            'students' => $students,
        ]);
    }
}
