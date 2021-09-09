<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Cohort;
use App\Models\Papers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $students = Student::all();
        $cohorts = Cohort::all();
        $papers = Papers::all();
        return view('pages.students', ['students'=>$students, 'cohorts' => $cohorts], compact('user', 'papers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.addStudent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Student::create($request->all());
        return redirect('students');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $id = $student->id;
        $students = Student::query();
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }
}
