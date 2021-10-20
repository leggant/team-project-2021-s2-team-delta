<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AssignRolesToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $users = User::all();
        foreach($users as $u) {
            if($u->email == 'studio-admin@op.ac.nz')
            {
                $u->assignRole('Super-Admin');
            }
            else {
                foreach($u->papers as $up)
                {
                    if($up->paper_name == "Studio 1")
                    {
                        $u->assignRole('Studio 1');
                    }
                    elseif($up->paper_name == "Studio 2")
                    {
                        $u->assignRole('Studio 2');
                    }
                    elseif($up->paper_name == "Studio 3")
                    {
                        $u->assignRole('Studio 3');
                    }
                    elseif($up->paper_name == "Studio 4") 
                    {
                        $u->assignRole('Studio 4');
                    }
                }
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
