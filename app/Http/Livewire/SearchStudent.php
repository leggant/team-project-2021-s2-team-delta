<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;
use App\Models\Cohort;

class SearchStudent extends Component
{
    public $query = '';
    public $searchResultsCount = 0;
    public $searchResultsLimit = 10;
    public $searchFields = ['student_id', 'first_name', 'last_name', 'email', 'github', 'paper'];
    public $searchField = 2;
    public $sortBy = '';
    public $sortDirection = 'asc';
    public function render()
    {
        $students = Student::where($this->searchFields[$this->searchField], 'like', '%' . $this->query . '%')->get();
        return view('livewire.search-student', [
            'students' => $students,
        ]);
    }
    public function hydrate() {
        $students = Student::where($this->searchFields[$this->searchField], 'like', '%' . $this->query . '%')->get();
        return view('livewire.search-student', [
            'students' => $students,
        ]);
    }
}
