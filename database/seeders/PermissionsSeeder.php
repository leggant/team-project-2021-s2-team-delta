<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\PermissionRegistrar;
use App\Models\User;

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
        Permission::firstOrCreate(['name' => 'create students']);
        Permission::firstOrCreate(['name' => 'edit students']);
        Permission::firstOrCreate(['name' => 'delete students']);
        Permission::firstOrCreate(['name' => 'create cohorts']);
        Permission::firstOrCreate(['name' => 'edit cohorts']);
        Permission::firstOrCreate(['name' => 'delete cohorts']);
        Permission::firstOrCreate(['name' => 'create notes']);
        Permission::firstOrCreate(['name' => 'edit notes']);
        Permission::firstOrCreate(['name' => 'delete notes']);
        Permission::firstOrCreate(['name' => 'upload evidence']);
        Permission::firstOrCreate(['name' => 'edit evidence']);
        Permission::firstOrCreate(['name' => 'delete evidence']);
        Permission::firstOrCreate(['name' => 'view evidence']);
        Permission::firstOrCreate(['name' => 'view notes']);
        Permission::firstOrCreate(['name' => 'view students']);
        Permission::firstOrCreate(['name' => 'view cohorts']);

        $admin = Role::firstOrCreate(['name' => 'Super-Admin']);

        $user1 = User::firstOrCreate(
            [
                'name' => 'Administrator',
            ],
            [
                'email' => 'studioadmin@op.ac.nz',
                'password' => Hash::make('studio2021'),
                'is_admin' => 1,
                'remember_token' => null,
            ]
        );
        $user1->assignRole('Super-Admin');
    }
}
