<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Evidence;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\StudentController;

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
        $student = $request->student_id;
        $path = 'files/'.$student;
        $request->validate([
            'title' => 'required|string|max:50',
            'student_id' => 'required|integer',
            'filepath' => 'required|file',
            'user_id' => 'required|integer'
        ]);
        $evidence = Evidence::create([
            'title' => $request->title,
            'description' => $request->description,
            'filepath' => $request->file('filepath')->store( $path ),
            'student_id' => $request->student_id,
            'user_id' => Auth::id()
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
