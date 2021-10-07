<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\Student;
use App\Models\Cohort;
use App\Models\User;
use App\Models\Papers;
use Illuminate\Database\Eloquent\Relations\Pivot;

class SearchStudent extends Component
{
    public $query = '';
    public $searchFields = ['first_name', 'last_name', 'email', 'github'];
    public $labels = ['First Name', 'Last Name', 'Email', 'Github'];
    public $searchField = 1;
    public $sortBy = '';
    public $user;
    public $students;
    public $cohorts;
    public $papers;

    public function mount($students, $cohorts, $user, $papers) 
    {
        $this->user = $user;
        $this->students = $students;
        $this->cohorts = $cohorts;
        $this->papers = $papers;
        return view('livewire.search-student', [
            'students' => $this->students,
            'cohorts' => $this->cohorts,
            'user' => $this->user,
            'papers' => $this->papers
        ]);
    }
    // does the initial search
    public function render()
    {
        // $this->students = Student::where($this->searchFields[$this->searchField], 'like', '%' . $this->query. '%')->get();
        return view('livewire.search-student', [
            'students' => $this->students
        ]);
    }

    // updates the search results each time the input filter changes
    public function hydrate() {
        // $this->students = Student::where($this->searchFields[$this->searchField], 'like', '%' . $this->query. '%')->get();
        // return view('livewire.search-student', [
        //     'students' => $this->students
        // ]);
    }
}
