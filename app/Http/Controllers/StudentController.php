<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Cohort;
use App\Models\Papers;
use App\Models\Note;
use App\Models\Evidence;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Builder;

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
        $taught = $user->load('papers')->papers;
        $students = array();
        for ($i=0; $i < count($taught); $i++) { 
            $sClass = DB::table('student')->where('cohort_id', $taught[$i]->key)->get();
            array_unshift($students, ['paper_id' => $taught[$i]->id, 'paper_name' => $taught[$i]->paper_name, 'classList' => $sClass]);
        }
        asort($students);
        $cohorts = Cohort::all();
        return view('pages.students', ['students'=>$students, 'cohorts' => $cohorts, 'papers' => $taught], compact('user'));
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
            'first_name' => 'required|alpha_dash|max:25|min:3',
            'last_name' => 'required|alpha_dash|max:25|min:3',
            'username' => 'required|alpha_num|unique:student|required|max:10',
            'github' => 'alpha_dash|unique:student|nullable|max:15',
            'cohort_id' => 'nullable|integer'
        ];
        $messages = [
            'first_name.required' => 'Student First name is required',
        ];
        $validator = Validator::make($request->all(), $rules, $messages)->validateWithBag('studenterror');
        $student = Student::create([
            'first_name' => Str::title($request->first_name),    
            'last_name' => Str::title($request->last_name),    
            'email' => $request->username . "@student.op.ac.nz",    
            'username' => Str::lower($request->username),    
            'github' => Str::lower($request->github),  
            'cohort_id' => $request->cohort_id  
        ]);
        return redirect()->action([StudentController::class, 'show'], ['student' => $student->id]);
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
    public function update(Request $request, Student $student)
    {
        $user = auth()->user();
        $rules = [
            'first_name' => 'alpha_dash|max:25|min:3',
            'last_name' => 'alpha_dash|max:25|min:3',
            'username' => 'alpha_num|unique:student|required|max:10',
            'github' => 'alpha_dash|unique:student|nullable|max:15',
            'cohort_id' => 'nullable|integer'
        ];
        $messages = [
            'first_name.required' => 'Student First name is required',
        ];
        $validator = Validator::make($student->all(), $rules, $messages)->validateWithBag('studenterror');
        $student = Student::create([
            'first_name' => Str::title($student->first_name),    
            'last_name' => Str::title($student->last_name),    
            'email' => $student->username . "@student.op.ac.nz",    
            'username' => Str::lower($student->username),    
            'github' => Str::lower($student->github),  
            'cohort_id' => $student->cohort_id  
        ]);
        return redirect()->action([StudentController::class, 'show'], ['student' => $student->id]);
    }
}
