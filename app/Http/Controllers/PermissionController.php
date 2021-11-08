<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Validator;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perms = Permission::all();
        return view('permissions.index', compact('perms'));
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
            'perm-name' => 'required|String',
            'guard-name' => 'required|String',
        ])->validate();

        $duplicate = Permission::where([
            ['name', 'LIKE', $request->input('perm-name')],
        ])->get();

        if (count($duplicate) != 0) {
            return redirect('/permissions')->with(
                'duplicate',
                'Permission Already Exists'
            );
        } else {
            $permission = new Permission();
            $permission->name = $request->input('perm-name');
            $permission->guard_name = $request->input('guard-name');
            $permission->save();
            return redirect('/permissions')->with(
                'success',
                'Permission Created Successfully'
            );
        }
    }
}
