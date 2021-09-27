<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AdminpanelTest extends DuskTestCase
{
    public function testFindAdminPage()
    {       
        $user = User::where('email', 'admin@admin.com')->first();

        $this->browse(function ($browser) use($user) {
            $browser->loginAs($user)
                    ->visit('/admin-panel')
                    ->pause(2000)
                    ->assertPathIs('/admin-panel')                   
                    ->assertSee('MANAGE USERS');                    
        });
    }

    public function testManageUsers()
    {    
        $this->browse(function ($browser) 
        {
            $browser
                    ->visit('/admin-panel')
                    ->pause(2000)
                    ->assertPathIs('/admin-panel')                   
                    ->press('MANAGE USERS')
                    ->pause(2000)
                    ->assertPathIs('/users')
                    ->pause(2000);                   
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
