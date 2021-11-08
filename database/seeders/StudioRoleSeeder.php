<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class StudioRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $studio1 = Role::firstOrCreate(['name' => 'Studio 1']);
        $studio2 = Role::firstOrCreate(['name' => 'Studio 2']);
        $studio3 = Role::firstOrCreate(['name' => 'Studio 3']);
        $studio4 = Role::firstOrCreate(['name' => 'Studio 4']);

        $studio1->givePermissionTo([
            'create students',
            'edit students',
            'create notes',
            'edit notes',
            'upload evidence',
            'edit evidence',
            'view evidence',
            'view notes',
            'view cohorts',
            'view students',
        ]);
        $studio2->givePermissionTo([
            'create students',
            'edit students',
            'create notes',
            'edit notes',
            'upload evidence',
            'edit evidence',
            'view evidence',
            'view notes',
            'view cohorts',
            'view students',
        ]);
        $studio3->givePermissionTo([
            'create students',
            'edit students',
            'create notes',
            'edit notes',
            'upload evidence',
            'edit evidence',
            'view evidence',
            'view notes',
            'view cohorts',
            'view students',
        ]);
        $studio4->givePermissionTo([
            'create students',
            'edit students',
            'create notes',
            'edit notes',
            'upload evidence',
            'edit evidence',
            'view evidence',
            'view notes',
            'view cohorts',
            'view students',
        ]);
    }
}
