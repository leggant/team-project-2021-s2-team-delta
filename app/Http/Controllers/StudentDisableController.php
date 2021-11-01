<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Papers;
use App\Models\Cohort;

class StudentDisableController extends Controller
{
    public function disable(Request $request)
    {
        $s = $request->input("students_selected");
        $students = json_decode($s);

        foreach($students as $student)
        {
            $sdb = Student::find($student);
            $sdb->is_active = 0;
            $sdb->cohort_id = null;
            $sdb->save();
        }

        return redirect()->back()->with('success', 'Student(s) Removed and Disabled Successfully');
    }

    public function enableView(Request $request)
    {
        $user = auth()->user();
        $students = Student::where('is_active', '=', 0)->orWhere('cohort_id', '=', null)->get();
        $paper = Papers::find($request->input('paper'));
        $cohorts = Cohort::all();
        return view('pages.enableStudents', compact('user', 'students', 'cohorts'));
    }

    public function enable(Request $request)
    {
        $students = $request->input('student_checkboxes');
        foreach($students as $student)
        {
            $s = Student::find($student);
            $s->is_active = 1;
            $s->cohort_id = $request->input('cohort');
            $s->save();
        }

        return redirect()->route('home')->with('success', 'Successfully Added Student(s)');
    }
}
