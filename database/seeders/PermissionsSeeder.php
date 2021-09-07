<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
        Permission::create(['name' => 'create students']);
        Permission::create(['name' => 'edit students']);
        Permission::create(['name' => 'delete students']);
        Permission::create(['name' => 'create cohorts']);
        Permission::create(['name' => 'edit cohorts']);
        Permission::create(['name' => 'delete cohorts']);
        Permission::create(['name' => 'create notes']);
        Permission::create(['name' => 'edit notes']);
        Permission::create(['name' => 'delete notes']);
        Permission::create(['name' => 'upload evidence']);
        Permission::create(['name' => 'edit evidence']);
        Permission::create(['name' => 'delete evidence']);

        //create roles and assign permissions
        $regular = Role::create(['name' => 'Regular']);
        $regular->givePermissionTo('create students');
        $regular->givePermissionTo('edit students');
        $regular->givePermissionTo('create cohorts');
        $regular->givePermissionTo('edit cohorts');
        $regular->givePermissionTo('create notes');
        $regular->givePermissionTo('edit notes');
        $regular->givePermissionTo('upload evidence');
        $regular->givePermissionTo('edit evidence');

        $admin = Role::create(['name' => 'Super-Admin']);

        $user = \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'is_admin' => 1,
        ]);

        $user->assignRole('Super-Admin');
    }
}
