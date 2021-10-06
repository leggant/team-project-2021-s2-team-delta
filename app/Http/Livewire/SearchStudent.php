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
    public $papers;
    public $user;
    public $students = [];
    public $pivot;

    public function mount() 
    {
        $this->user = auth()->user();
        $this->papers = auth()->user()->papers;
        $this->pivot = DB::table('user_papers')->where('user_id', $this->user->id)->get();
        // $students = DB::table('student')->where('cohort_id', $this->pivot->paper_id)->get();
        $this->students = Student::where($this->searchFields[$this->searchField], 'like', '%' . $this->query . '%')->get();
        return view('livewire.search-student', [
            'students' => $this->students
        ]);
    }
    // does the initial search
    public function render()
    {
        $this->students = Student::where($this->searchFields[$this->searchField], 'like', '%' . $this->query. '%')->get();
        return view('livewire.search-student', [
            'students' => $this->students
        ]);
    }

    // updates the search results each time the input filter changes
    public function hydrate() {
        $this->students = Student::where($this->searchFields[$this->searchField], 'like', '%' . $this->query. '%')->get();
        return view('livewire.search-student', [
            'students' => $this->students
        ]);
    }
}
