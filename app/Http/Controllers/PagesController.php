<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Note;
use App\Models\User;
use App\Models\Cohort;
use App\Models\Student;
use App\Models\Evidence;

class PagesController extends Controller
{
    // public function getCohort($id)
    // {
    //     $cohorts = Cohort::query();
    //     if ($cohorts->where('id', $id)->exists()) {
    //         $cohort = $cohorts->where('id', $id)->first();
    //         return view('pages.viewCohort', ['cohort' => $cohort]);
    //     } else {
    //         return response()->json(['message' => 'Cohort not found.'], 404);
    //     }
    // }

    // public function cohort()
    // {
    //     $cohorts = DB::select('select * from cohorts');
    //     return view('pages.cohort')->with('cohorts', $cohorts);
    // }

    public function evidence()
    {
        $evidence = Evidence::all();
        $students = Student::all();
        return view(
            'pages.evidence',
            ['evidences' => $evidence],
            ['student' => $students]
        );
    }

    public function notes()
    {
        $notes = Note::all();
        $students = Student::all();
        return view(
            'pages.notes',
            ['notes' => $notes],
            ['student' => $students]
        );
    }
}
