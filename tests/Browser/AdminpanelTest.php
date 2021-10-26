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
        $user = User::where('is_admin', 1)->first();

        $this->browse(function ($browser) use($user) {
            $browser->loginAs($user)
                    ->visit('/users')
                    ->pause(2000)
                    ->assertPathIs('/users')                   
                    ->assertSee('Current Registered Users');                    
        });
    }

    // Method to test user creation for admin
    // involves navigation to pages and inputting into several fields
    // then confirming the operation was successful

    public function testCreateNewAdminUser()
    {    
        $this->browse(function ($browser) {
            $browser->visit('/users')
                    ->pause(2000)
                    ->assertPathIs('/users')                   
                    ->assertSee('Current Registered Users')
                    ->press('CREATE NEW USER')
                    ->assertPathIs('/users/create*')
                    ->screenshot('usercreatescreen')
                    ->type('#Name', 'Dusk Admin')
                    ->type('#Email', 'fake@fakeemail.com')
                    ->type('#Password', 'SeriouslyComplexPassword987')
                    ->check('#Admin')
                    ->select('Papers[]', 2)
                    ->screenshot('createadmininputs')
                    ->press('SUBMIT')
                    ;                    
        });
    }

    /* Old tests designed for functionality that no-longer exists
    i.e. links have changed and method for creating, editing users is now different

    public function testManageUsers()
    {    
        $this->browse(function ($browser) 
        {
            $browser->visit('/admin-panel')
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
    */

}
