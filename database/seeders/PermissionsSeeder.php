<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        //Permissions
        Permission::create(['name' => 'edit students']);
        Permission::create(['name' => 'delete students']);
        Permission::create(['name' => 'edit cohorts']);
        Permission::create(['name' => 'delete cohorts']);
        Permission::create(['name' => 'edit notes']);
        Permission::create(['name' => 'delete notes']);
        Permission::create(['name' => 'edit evidence']);
        Permission::create(['name' => 'delete evidence']);

        //create roles and assign permissions
        $regular = Role::create(['name' => 'Regular']);
        $admin = Role:create(['name' => 'Super-Admin']);
    }
}
