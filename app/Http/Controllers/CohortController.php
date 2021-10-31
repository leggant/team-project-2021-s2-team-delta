<?php

namespace App\Http\Controllers;

use App\Models\Cohort;
use App\Models\Papers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CohortController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cohorts = Cohort::orderBy('paper_id')->get();
        $papers = Papers::all();
        $user = auth()->user();
        return view('pages.cohort', compact('cohorts', 'user', 'papers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $current = Cohort::where('year', $request->year)
            ->where('semester', $request->semester)
            ->where('stream', $request->stream)
            ->get();
        if ($current->isNotEmpty()) {
            $cohorts = Cohort::orderBy('paper_id', 'desc')->get();
            return redirect()->action([CohortController::class, 'index'], 
            ['cohorts' => $cohorts]);
        } else {
            Validator::make($request->all(), [
                'paper' => 'required',
                'year' => 'required',
                'semester' => 'required',
                'stream' => 'required',
            ])->validate();
            $cohort = Cohort::create([
                'paper_id' => $request->paper,
                'year' => $request->year,
                'semester' => $request->semester,
                'stream' => $request->stream,
            ]);
            $cohorts = Cohort::orderBy('paper_id', 'desc')->get();
            return redirect()->action([CohortController::class, 'index'], ['cohorts' => $cohorts]);
        }
    }
}
