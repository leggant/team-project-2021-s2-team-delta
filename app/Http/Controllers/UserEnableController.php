<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserEnableController extends Controller
{
    public function index()
    {
        $users = User::where('is_active', '=', 0)->get();
        return view('users.deactivated', compact('users'));
    }

    public function enableUser(Request $request)
    {
        $users = $request->input('selected_users');
        if(!$users)
        {
            return redirect()->back()->with('error', 'No User(s) Selected');
        }
        else
        {
            Validator::make($request->all(), [
                'selected_users' => 'required',
            ])->validate();
            foreach($users as $user)
            {
                $u = User::find($user);
                $u->is_active = 1;
                $u->save();
            }
            return redirect()->back()->with('success', 'User(s) Activated Successfully');
        }
    }
}
