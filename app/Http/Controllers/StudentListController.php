<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Cohort;

class StudentListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::where('cohort_id' ,'!=', null)->orderBy('is_active', 'desc')->get();
        $cohorts = Cohort::all();
        $groups = $students->groupBy('is_active');
        $user = auth()->user();
        return view(
            'pages.studentListView',
            compact('students', 'user', 'groups', 'cohorts')
        );
    }
}
