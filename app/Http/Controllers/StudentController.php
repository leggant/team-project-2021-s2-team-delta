<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Cohort;
use App\Models\Papers;
use App\Models\Note;
use App\Models\Evidence;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

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
        $students = Student::where('cohort_id', '!=', null)->get();
        $cohorts = Cohort::orderBy('paper_id')->get();
        $papers = Papers::all();
        return view(
            'pages.students',
            ['students' => $students, 'cohorts' => $cohorts],
            compact('user', 'papers')
        );
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
            'first_name' => 'required|max:25|min:3|regex:/^[\pL\s\-]+$/u',
            'last_name' => 'required|max:25|min:3|regex:/^[\pL\s\-]+$/u',
            'username' => 'required|alpha_num|unique:student|required|max:10',
            'github' => 'alpha_dash|unique:student|nullable|max:15',
            'cohort_id' => 'required|integer',
        ];
        $messages = [
            'first_name.required' => 'Student first name is required',
            'first_name.regex' => 'Please use letters, spaces and hyhens only',
            'first_name.max' => 'First name exceeds 25 character limit',
            'first_name.min' => 'First name must have at least 3 characters',
            'last_name.required' => 'Student last name is required',
            'last_name.regex' => 'Please use letters, spaces and hyhens only',
            'last_name.max' => 'Last name exceeds 25 character limit',
            'last_name.min' => 'Last name must have at least 3 characters',
        ];
        $validator = Validator::make(
            $request->all(),
            $rules,
            $messages
        )->validateWithBag('studenterror');
        $student = Student::create([
            'first_name' => Str::title($request->first_name),
            'last_name' => Str::title($request->last_name),
            'email' => $request->username . '@student.op.ac.nz',
            'username' => Str::lower($request->username),
            'github' => Str::lower($request->github),
            'cohort_id' => $request->cohort_id,
        ]);
        $user = auth()->user();
        $students = Student::where('cohort_id', '!=', null)->get();
        $cohorts = Cohort::orderBy('updated_at', 'desc')->get();
        $papers = Papers::all();
        return view(
            'pages.students',
            ['students' => $students, 'cohorts' => $cohorts],
            compact('user', 'papers')
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $student = Student::where('id', $student->id)->first();
        if ($student->exists()) {
            $uploads = Evidence::where('student_id', $student->id)->get();
            $notes = Note::where('student_id', $student->id)->get();
            # Will also have to pass respective evidence and notes/observations rows here once they have proper relationships
            return view('pages.viewStudent', [
                'student' => $student,
                'uploads' => $uploads,
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
    public function edit(Request $request, Student $student)
    {
        $student = Student::where('id', $student->id)->get();
        dd($student);
        return view('pages.editStudent', [
            'student' => $student,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = auth()->user();
        $rules = [
            'first_name' => 'regex:/^[\pL\s\-]+$/u|max:25|min:3',
            'last_name' => 'regex:/^[\pL\s\-]+$/u|max:25|min:3',
            'username' => ['required', 'max:10', 'alpha_num', Rule::unique('student')->ignore($id)],
            'github' => ['alpha_dash', 'max:15', 'nullable', Rule::unique('student', 'github')->ignore($id)],
            'cohort_id' => 'required|integer',
        ];

        $messages = [
            'first_name.regex' => 'Please use letters, spaces and hyhens only',
            'first_name.max' => 'First name exceeds 25 character limit',
            'first_name.min' => 'First name must have at least 3 characters',
            'last_name.regex' => 'Please use letters, spaces and hyhens only',
            'last_name.max' => 'Last name exceeds 25 character limit',
            'last_name.min' => 'Last name must have at least 3 characters',
        ];

        $validator = Validator::make(
            $request->all(),
            $rules,
            $messages
        )->validateWithBag('studenterror');
        
        $upstudent = Student::find($id);
        $upstudent->first_name = $request->first_name;
        $upstudent->last_name = $request->last_name;
        $upstudent->username = Str::lower($request->username);
        $upstudent->email = $request->username . '@student.op.ac.nz';
        $upstudent->github = Str::lower($request->github) ? Str::lower($request->github) : $upstudent->github;
        $upstudent->save();        
        return redirect()->action(
            [StudentController::class, 'show'],
            ['student' => $id]
        );
    }
}
