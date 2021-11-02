<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Papers;
use App\Models\Cohort;
use Illuminate\Support\Facades\Validator;

class StudentDisableController extends Controller
{
    public function disable(Request $request)
    {
        Validator::make($request->all(), [
            'students_selected' => 'required',
        ])->validate();
        
        $s = $request->input("students_selected");
        $students = json_decode($s);
        if(empty($students))
        {
            return redirect()->back()->with('error', 'No Student(s) Selected');
        }
        else 
        {
            foreach($students as $student)
            {
                $sdb = Student::find($student);
                $sdb->is_active = 0;
                $sdb->cohort_id = null;
                $sdb->save();
            }
            return redirect()->back()->with('success', 'Student(s) Removed and Disabled Successfully');
        }
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
        Validator::make($request->all(), [
            'student_checkboxes' => 'required',
            'cohort' => 'required',
        ])->validate();

        $students = $request->input('student_checkboxes');
        foreach($students as $student)
        {
            $s = Student::find($student);
            $s->is_active = 1;
            $s->cohort_id = $request->input('cohort');
            $s->save();
        }

        return redirect()->back()->with('success', 'Successfully Added Student(s)');
    }

    public function move(Request $request)
    {
        Validator::make($request->all(), [
            'students_selected' => 'required',
            'cohort' => 'required',
        ])->validate();

        $s = $request->input("students_selected");
        $students = json_decode($s);

        if(empty($students))
        {
            return redirect()->back()->with('error', 'No Student(s) Selected');
        }
        else
        {
            foreach($students as $student)
            {
                $sdb = Student::find($student);
                $sdb->cohort_id = $request->input('cohort');
                $sdb->save();
            }
            return redirect()->back()->with('success', 'Student(s) Moved Successfully');
        }
    }
}
