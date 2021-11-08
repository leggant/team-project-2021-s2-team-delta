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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Papers  $papers
     * @return \Illuminate\Http\Response
     */
    public function edit(Papers $paper)
    {
        return view('papers.edit', compact('paper'));
    }
}
