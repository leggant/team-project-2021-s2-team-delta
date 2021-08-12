<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Note;
use App\Models\User;
use App\Models\addStudent;
use App\Models\Cohort;

class PagesController extends Controller
{
    public function getCohort($id)
    {
        $cohorts = Cohort::query();
        if ($cohorts->where('id', $id)->exists()) {
            $cohort = $cohorts->where('id', $id)->first();
            return view('pages.viewCohort', ['cohort' => $cohort]);
        } else {
            return response()->json(['message' => 'Cohort not found.'], 404);
        }
    }

    public function cohort()
    {
        $cohorts = DB::select('select * from cohorts');
        return view('pages.cohort')->with('cohorts', $cohorts);
    }

    public function evidence()
    {
        $evidences = DB::select('select * from evidence');
        $student = DB::select('select * from student');
        return view(
            'pages.evidence',
            ['evidences' => $evidences],
            ['student' => $student]
        );
    }

    public function notes()
    {
        $notes = DB::select('select * from notes');
        $student = DB::select('select * from student');
        return view(
            'pages.notes',
            ['notes' => $notes],
            ['student' => $student]
        );
    }
}
