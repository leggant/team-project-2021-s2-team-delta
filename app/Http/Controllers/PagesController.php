<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Note;
use App\addStudent;
use App\Cohort;

class PagesController extends Controller
{
    public function index()
    {
        $addStudent = DB::select('select * from student');
        return view('pages.index', ['addStudent' => $addStudent]);
    }

    public function addStudent()
    {
        $addStudent = DB::select('select * from student');
        return view('pages.addStudent', ['addStudent' => $addStudent]);
    }

    public function getStudent($id)
    {
        $students = addStudent::query();
        if ($students->where('id', $id)->exists()) {
            $student = $students->where('id', $id)->first();
            $evidences = DB::table('evidence')
                ->where('student_id', 'LIKE', '%' . $student->id . '%')
                ->get();
            $notes = DB::table('notes')
                ->where('student_id', 'LIKE', '%' . $student->id . '%')
                ->get();
            # Will also have to pass respective evidence and notes/observations rows here once they have proper relationships
            return view('pages.viewStudent', [
                'student' => $student,
                'evidences' => $evidences,
                'notes' => $notes,
            ]);
        } else {
            return response()->json(['message' => 'Student not found.'], 404);
        }
    }

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
