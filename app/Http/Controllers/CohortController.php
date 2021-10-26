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
        $cohort = Cohort::create([
            'paper_id' => $request->paper,
            'year' => $request->year,
            'semester' => $request->semester,
            'stream' => $request->stream,
        ]);
        $user = auth()->user();
        $cohorts = Cohort::orderBy('paper_id', 'desc')->get();
        return redirect()->action(
            [CohortController::class, 'index'],
            ['cohorts' => $cohorts]
        );
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
