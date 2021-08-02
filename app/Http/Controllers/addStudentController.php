<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Requests;
use App\Models\addStudent;
use Illuminate\Http\Request;

class addStudentController extends Controller
{
    //i will add the other CRUD methods at a later date just a bit confused
    public function storeData(Request $request)
    {
        $student = new addStudent;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->github = $request->github;
        $student->save();

        $addStudent = DB::select('select * from student');
        return view('pages.addStudent', ['addStudent'=>$addStudent]);
    
    }
    /*public function getAllStudents(){
        $addStudent = Student::all();
    }*/
    public function show($id)
    {

    }
}
