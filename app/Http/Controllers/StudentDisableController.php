<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

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
}
