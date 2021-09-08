<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;
use App\Models\Papers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $user = User::all(); #Grabs all users
        $id = Auth::id(); #Grabs id of logged in user
        return view('users.index', compact('user', 'id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $papers = Papers::all(); #Grabs all papers
        return view('users.create', compact('papers'));
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
            'Name' => 'required',
            'Email' => 'required',
            'Password' => 'required',
        ])->validate();

        #Create new User and save the given data into the correct db fields
        $user = new User;
        $user->name = $request->input('Name');
        $user->email = $request->input('Email');
        $user->password = Hash::make($request['Password']); #Hash password to make it secure
        #If the request contains Admin field then save is_admin as 1 otherwise it will just fill is_admin with default value which is 0
        if($request->has('Admin'))
        {
            $user->is_admin = 1;
            $user->assignRole('Super-Admin');
        }
        else {
            $user->assignRole('Regular');
        }
        #Save the new user
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
        $papers = Papers::all();
        $id = Auth::id(); #Grabs id of logged in user
        return view('users.edit', compact('user', 'papers', 'id'));
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
        #Validate the fields recieved
        Validator::make($request->all(), [
            'Name' => 'required',
            'Email' => 'required',
            'Papers' => 'required|array',
        ])->validate();

        #Change db field of user to new information provided
        $user->name = $request->input('Name');
        $user->email = $request->input('Email');
        if($request->has('Admin'))
        {
            $user->is_admin = 1;
            $user->syncRoles('Super-Admin');
        }
        else
        {
            if($request->input('Email') == 'admin@admin.com')
            {
                $user->is_admin = 1;
                $user->syncRoles('Super-Admin');
            }
            else{
                $user->is_admin = 0;
                $user->syncRoles('Regular');
            }
        }
        #Adds papers to the pivot table for the user. Also updates pivot table with new papers if they don't exist in the table
        $user->papers()->sync($request->input('Papers'));
        #Save the new information to exisitng user
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
        #Delete a user
        $user->delete();
        #Deletes data relevant to the user in the pivot table
        $user->papers()->detach($user->id);
        return redirect('/users')->with('success', 'User Deleted');
    }
}
