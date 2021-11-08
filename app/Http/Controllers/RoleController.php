<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        $perms = Permission::all();
        return view('roles.index', compact('roles', 'perms'));
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
            'role-name' => 'required|String',
            'guard-name' => 'required|String',
            'permissions' => 'required|array',
        ])->validate();
        $duplicate = Role::where(['name', $request->input('role-name')])->get();
        if (count($duplicate) != 0) {
            return redirect('/roles')->with('duplicate', 'Role Already Exists');
        } else {
            $role = new Role();
            $role->name = $request->input('role-name');
            $role->guard_name = $request->input('guard-name');
            $role->syncPermissions($request->input('permissions'));
            $role->save();
            return redirect('/roles')->with(
                'success',
                'Role Created Successfully'
            );
        }
    }
}
