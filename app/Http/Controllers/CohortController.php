<?php

namespace App\Http\Controllers;

use App\Models\Cohort;
use App\Models\Papers;
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
        $cohorts = Cohort::all();
        $papers = Papers::all();
        $user = auth()->user();
        return view('pages.cohort', compact('cohorts', 'papers', 'user'));
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
        Validator::make($request->all(), [
            'paper' => 'required',
            'year' => 'required',
            'semester' => 'required',
            'stream' => 'required',
        ])->validate();
        $cohort = new Cohort;
        $cohort->paper_id = $request->input('paper');
        $cohort->year = $request->input('year');
        $cohort->semester = $request->input('semester');
        $cohort->stream = $request->input('stream');
        $cohort->save();
        return redirect('/cohorts')->with('success', 'Cohort was Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cohort  $cohort
     * @return \Illuminate\Http\Response
     */
    public function show(Cohort $cohort)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cohort  $cohort
     * @return \Illuminate\Http\Response
     */
    public function edit(Cohort $cohort)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cohort  $cohort
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cohort $cohort)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cohort  $cohort
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cohort $cohort)
    {
        //
    }
}
