<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LecturerRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lecturer = Role::firstOrCreate(['name' => 'Lecturer']);
        if ($lecturer->wasChanged()) {
            # wasChanged() checks if the role was created or updated
            $lecturer->givePermissionTo([
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
        $admin = Role::firstOrCreate(['name' => 'Super-Admin']);

        $user1 = User::firstOrCreate(
            ['name' => 'Administrator'],
            [
                'email' => 'studioadmin@op.ac.nz',
                'password' => Hash::make('studio2021'),
                'is_admin' => 1,
                'remember_token' => null,
            ]
        );

        $user2 = User::firstOrCreate(
            ['name' => 'Temp A'],
            [
                'email' => 'studio-a@op.ac.nz',
                'password' => Hash::make('studio2021'),
                'is_admin' => 0,
                'remember_token' => null,
            ]
        );
        $user3 = User::firstOrCreate(
            [
                'name' => 'Temp B',
            ],
            [
                'email' => 'studio-b@op.ac.nz',
                'password' => Hash::make('studio2021'),
                'is_admin' => 0,
                'remember_token' => null,
            ]
        );

        $user1->assignRole('Super-Admin');
        $user2->assignRole('Lecturer');
        $user3->assignRole('Lecturer');
    }
}
