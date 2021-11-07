<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
use App\Models\Cohort;


class LecturerPaperSelection extends Component
{
    public $papers;
    public $cohort;
    public $user;
    public $selectedPaper = [];
    public $noneSelected;
    public function mount($papers, $user)
    {
        $this->papers = $papers;
        $this->user = $user;
        $this->selectedPaper = $user->papers->pluck('id')->toArray();
    }
    public function render()
    {
        return view('livewire.lecturer-paper-selection');
    }
    public function addPaper($id, $paper)
    {
        $this->selectedPaper[] = $paper;
    }
    public function toggleNone()
    {
        dd(!$this->noneSelected);
    }
}
