<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Evidence;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class EvidenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uploads = Evidence::all();
        $students = Student::all();
        $user = auth()->user();
        return view('pages.evidence', compact('uploads', 'students', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = $request->file('filepath')->store('uploads/'.$student, 's3'); // file is stored within a folder of the student id in s3. 
        Storage::disk('s3')->setVisibility($path, 'public'); //all files in the bucket aren't public, only for this request they are temporarily set. Comment out this line to deny access. 
        $student = $request->student_id;
        $path = 'files/'.$student;
        $rules = [
            'title' => 'required|string|max:50',
            'student_id' => 'required|integer',
            'filepath' => 'required|required_if:filelink,null|file|unique:evidence',
            'originalFileName' => 'required|string|max:100',
            'user_id' => 'required|integer',
            'url' => 'required|string|unique:evidence,url',
            'description' => 'nullable|string'
        ];
        $messages = [
            'title.required' => 'File/Upload Title Field Is Required',
            'title.max' => 'Max Title Length is 50 Chars',
            'student_id.required' => 'Student Name Must Be Selected',
            'filepath.unique' => 'File Must Have A Unique Path',
            'url.unique' => 'File URL must be unique',
        ];
        $validator = Validator::make($request->all(), $rules, $messages)->validateWithBag('evidenceerror');
        
        $evidence = Evidence::create([
            'title' => $request->title,
            'description' => $request->description,
            'filepath' => $request->file('filepath')->store( $path ),
            'originalFileName' => $request->file('filepath')->getClientOriginalName(),
            // 'filelink' => $request->filelink ? $request->filelink : null,
            'url' => Storage::disk('s3')->url($path),
            'student_id' => $request->student_id,
            'user_id' => Auth::id()
        ]);

        return redirect()->action([StudentController::class, 'show'], ['student' => $student]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // not currently returning a file to the browser
        $file = Evidence::find($id);
        $student = Student::find($file->student_id);
        return redirect()->action([StudentController::class, 'show'], ['student' => $student, 'file' => $file]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evidence  $evidence
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Evidence $evidence)
    {
        $student = $evidence->student_id;
        $evidence->delete();
        return redirect()->action([StudentController::class, 'show'], ['student' => $student]);
    }
}
