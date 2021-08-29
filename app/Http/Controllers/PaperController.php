<?php

namespace App\Http\Controllers;

use App\Models\Papers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PaperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paper = Papers::all();
        return view('papers.index', compact('paper'));
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
        #Validate the fields recieved
        Validator::make($request->all(), [
            'paper' => 'required|String',
        ])->validate();

        $duplicate = Papers::where([
            ['paper_name', 'LIKE', $request->input('paper')],
        ])->get();

        if(count($duplicate) != 0) {
            return redirect('/papers')->with('duplicate', 'Paper Already Exists');
        }
        else {
            $papers = new Papers;
            $papers->paper_name = $request->input('paper');
            $papers->save();
            return redirect('/papers')->with('success', 'Paper Created Successfully');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Papers  $papers
     * @return \Illuminate\Http\Response
     */
    public function show(Papers $papers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Papers  $papers
     * @return \Illuminate\Http\Response
     */
    public function edit(Papers $paper)
    {
        return view('papers.edit', compact('paper'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Papers  $papers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Papers $paper)
    {
        #Validate the fields recieved
        Validator::make($request->all(), [
            'paper' => 'required|String',
        ])->validate();

        $duplicate = Papers::where([
            ['paper_name', 'LIKE', $request->input('paper')],
        ])->get();

        if(count($duplicate) != 0) {
            return redirect('/papers')->with('duplicate', 'Paper Already Exists');
        }
        else {
            $paper->paper_name = $request->input('paper');
            $paper->save();
            return redirect('/papers')->with('success', 'Paper Updated Successfully');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Papers  $papers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Papers $paper)
    {
        $paper->delete();
        return redirect('/papers')->with('success', 'Paper Deleted');
    }
}
