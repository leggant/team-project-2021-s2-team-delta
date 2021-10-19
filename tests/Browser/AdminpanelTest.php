<?php

namespace Tests\Browser;

use App\Models\User;
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
        $user = User::factory()->create([
            'name' => 'name',
            'email' => 'admin@op.ac.nz',
            'password' => Hash::make('password'),
            'is_admin' => 1,
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);

        $this->browse(function ($browser) use($user) {
            $browser->loginAs($user)
                    ->visit('/users')
                    ->pause(2000)
                    ->assertPathIs('/users')                   
                    ->assertVisible("@dusk-title");                    
        });
    }

    public function testManagePapers()
    {    
        $this->browse(function ($browser) 
        {
            $browser
                    ->visit('/admin-panel')
                    ->pause(2000)
                    ->assertPathIs('/admin-panel')                   
                    ->press('MANAGE PAPERS')
                    ->pause(2000)
                    ->assertPathIs('/papers');                    
        });
    }

    public function testManagePermissions()
    {    
        $this->browse(function ($browser) 
        {
            $browser
                    ->visit('/admin-panel')
                    ->pause(2000)
                    ->assertPathIs('/admin-panel')                   
                    ->press('MANAGE PERMISSIONS')
                    ->pause(2000)
                    ->assertPathIs('/permissions');                    
        });
    }

    public function testManageRoles()
    {    
        $this->browse(function ($browser) 
        {
            $browser
                    ->visit('/admin-panel')
                    ->pause(2000)
                    ->assertPathIs('/admin-panel')                   
                    ->press('MANAGE ROLES')
                    ->pause(2000)
                    ->assertPathIs('/roles');                    
        });
    }


}
