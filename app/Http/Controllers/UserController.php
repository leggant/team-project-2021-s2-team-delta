<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        $id = Auth::id();
        return view('users.index', compact('user', 'id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
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
            'Name' => 'required',
            'Email' => 'required',
            'Password' => 'required',
        ])->validate();

        $user = new User;
        $user->name = $request->input('Name');
        $user->email = $request->input('Email');
        $user->password = Hash::make($request['Password']);
        if($request->has('Admin'))
        {
            $user->is_admin = 1;
        }
        $user->save();
        return redirect('/users')->with('success', 'User was Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        Validator::make($request->all(), [
            'Name' => 'required',
            'Email' => 'required',
        ])->validate();

        $user->name = $request->input('Name');
        $user->email = $request->input('Email');
        if($request->has('Admin'))
        {
            $user->is_admin = 1;
        }
        else
        {
            $user->is_admin = 0;
        }
        $user->save();

        return redirect('/users')->with('success', 'User Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/users')->with('success', 'User Deleted');
    }
}
