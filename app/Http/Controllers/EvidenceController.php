<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Evidence;
use App\Models\Student;
use Illuminate\Http\Request;
use Auth;

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
        if ($request->hasFile('image')) {
            //file/image?

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png', // Only allow .jpg, .bmp and .png file types.
            ]);

            // $student = DB::table('student')
            //     ->where('name', 'LIKE', '%' . $request->student . '%')
            //     ->get();
            $evidence = new Evidence();
            $evidence->title = $request->title;
            $evidence->image = $request->file('image')->store('public/images'); //saves file locally at storage/public/images
            $evidence->student_id = $request->input('student');
            $evidence->user_id = Auth::id();
            $evidence->save(); // save it to the database.

            $evidences = DB::select('select * from evidence');
            $student = DB::select('select * from student');
            return view(
                'pages.evidence',
                ['evidences' => $evidences],
                ['student' => $student]
            );
        }
        return 'failed';
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete the Todo
        $evidence = Evidence::findOrFail($id);
        $id = $evidence->student_id;
        $evidence->delete();
    }
}
