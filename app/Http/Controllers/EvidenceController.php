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

class EvidenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evidence = Evidence::all();
        $students = Student::all();
        return view(
            'pages.evidence',
            ['evidences' => $evidence],
            ['student' => $students]
        );
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
        $student = $request->student;
      
        $request->validate([
            'title' => 'required|string|max:50',
            'filepath' => 'mimes:jpeg,bmp,png,jpg,pdf,doc,docx,md,html|file|required|max:8000', //max 8mb
        ]);

        $path = $request->file('filepath')->store('uploads/'.$student.'/', 's3'); // file is stored within a folder of the student id in s3. 

        //Storage::disk('s3')->setVisibility($path, 'public'); //all files in the bucket aren't public, only for this request they are temporarily set. Comment out this line to deny access. 

        $evidence = Evidence::create([
            'title' => $request->title,
            'description' => $request->description,
            'filepath' => basename($path), // This gets the filename. I tried changing the 'filepath' within the migration, form and model to 'filename' however this for some reason broke the upload.
            'url' => Storage::disk('s3')->url($path),    //retrieving the specffic path that points to the file uploaded. 
            'student_id' => $request->student,
            'user_id' => Auth::id(),
        ]);

        return redirect()->action([StudentController::class, 'show'], ['student' => $student]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
