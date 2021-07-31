<?php

namespace App\Http\Controllers;

use DB;
use App\Note;
use App\Cohort;
use Illuminate\Http\Request;
use Validator;

class ApiController extends Controller
{
    public function createNote(Request $request)
    {
        $student = DB::table('student')
            ->where('name', 'LIKE', '%' . $request->student . '%')
            ->get();
        $note = new Note();
        $note->student_name = $request->student;
        $note->notes = $request->notes;
        $note->student_id = $student[0]->id;
        $note->save(); // save it to the database.

        $students = DB::select('select * from student');
        return view('pages.notes', ['student' => $student]);
    }

    public function updateNote(Request $request, $id)
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

    public function deleteNote($id)
    {
        $notes = Note::query();
        if ($notes->where('id', $id)->exists()) {
            $note = $notes->find($id);
            $note->delete();
        } else {
            //return response()->json(['message' => 'note not found.'], 404);
        }
    }

    public function getAllNotes()
    {
        $notes = Note::query();
        return response($notes->get(), 200);
    }

    public function getNote($id)
    {
        $notes = Note::query();
        if ($notes->where('id', $id)->exists()) {
            $note = $notes->where('id', $id)->get();
            return response($note, 200);
        } else {
            return response()->json(['message' => 'note not found.'], 404);
        }
    }

    public function createCohort(Request $request)
    {
        Cohort::create($request->all());
        $cohorts = Cohort::query()->get();
        return view('pages.cohort', ['cohorts' => $cohorts]);
    }

    public function updateCohort(Request $request, $id)
    {
        $cohorts = Cohort::query();
        if ($cohorts->where('id', $id)->exists()) {
            $cohort = $cohorts->find($id);
            $cohort->subject = is_null($request->subject)
                ? $cohort->subject
                : $request->subject;
            $cohort->year = is_null($request->year)
                ? $cohort->year
                : $request->year;
            $cohort->semester = is_null($request->semester)
                ? $cohort->semester
                : $request->semester;
            $cohort->stream = is_null($request->stream)
                ? $cohort->stream
                : $request->stream;
            $cohort->students = is_null($request->students)
                ? $cohort->students
                : $request->students;
            $cohort->save();
            return response()->json(['message' => 'Cohort updated.'], 200);
        } else {
            return response()->json(['message' => 'Cohort not found.'], 404);
        }
    }

    public function deleteCohort($id)
    {
        $cohorts = Cohort::query();
        if ($cohorts->where('id', $id)->exists()) {
            $cohort = $cohorts->find($id);
            $cohort->delete();
            return response()->json(['message' => 'Cohort deleted.'], 202);
        } else {
            return response()->json(['message' => 'Cohort not found.'], 404);
        }
    }

    public function getAllCohorts()
    {
        $cohorts = Cohort::query();
        return response($cohorts->get(), 200);
    }

    public function getCohort($id)
    {
        $cohorts = Cohort::query();
        if ($cohorts->where('id', $id)->exists()) {
            $cohort = $cohorts->where('id', $id)->get();
            return response($cohort, 200);
        } else {
            return response()->json(['message' => 'Cohort not found.'], 404);
        }
    }
}
