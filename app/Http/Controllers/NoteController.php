<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\StudentController;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = Note::all();
        $students = Student::all();
        return view(
            'pages.notes',
            ['notes' => $notes],
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
        return view('pages.notes');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $student = Student::where('id', $request->student_id)->first();
        Note::create(
            [
                'student_id' => $request->student,
                'notes' => $request->notes,
            ]
        );
        return redirect()->action([StudentController::class, 'show'], ['student' => $request->student]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function show(Note $note)
    {
        if ($notes->where('id', $id)->exists()) {
            $note = $notes->where('id', $id)->get();
            return response($note, 200);
        } else {
            return response()->json(['message' => 'note not found.'], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function edit(Note $note)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Note $note)
    {
        $notes = Note::query();
        if ($notes->where('id', $id)->exists()) {
            $note = $notes->find($id);
            $note->student_name = is_null($request->student_name)
                ? $note->student_name
                : $request->student_name;
            $note->notes = is_null($request->notes)
                ? $note->notes
                : $request->notes;
            $note->save();
            return response()->json(['message' => 'note updated.'], 200);
        } else {
            return response()->json(['message' => 'note not found.'], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function destroy(Note $note)
    {
        $notes = Note::query();
        if ($notes->where('id', $id)->exists()) {
            $note = $notes->find($id);
            $note->delete();
        } else {
            //return response()->json(['message' => 'note not found.'], 404);
        }
    }
}
