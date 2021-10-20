<?php

namespace Tests\Browser;

use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Tests\DuskTestCase;

class AdminpanelTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function testFindAdminPage()
    {
        Role::create(['name' => 'Super-Admin']);

        $user = User::factory()->create([
            'name' => 'name',
            'email' => 'admin@op.ac.nz',
            'password' => Hash::make('password'),
            'is_admin' => 1,
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);

        $user->assignRole('Super-Admin');

        $this->browse(function ($browser) use($user) {
            $browser->loginAs($user)
                    ->visit('/users')
                    ->pause(2000)
                    ->assertPathIs('/users')                   
                    ->assertVisible("@admin-panel");                
        });
    }
}
