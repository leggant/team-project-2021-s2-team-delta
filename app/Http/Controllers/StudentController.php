<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Cohort;
use App\Models\Papers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

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
        $rules = [
            'first_name' => 'required|unique:student|max:25|min:3',
            'last_name' => 'required|alpha_dash|max:25|min:3',
            'email' => 'email:rfc|unique:student|required',
            'username' => 'required|alpha|unique:student|required|max:15',
            'github' => 'alpha_dash|unique:student|nullable|max:15',
            'cohort_id' => 'nullable|integer'
        ];
        $messages = [
            'first_name.required' => 'Student First name is required',
        ];
        $validator = Validator::make($request->all(), $rules, $messages)->validateWithBag('studenterror')->withInput();
        
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
