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

        $this->browse(function ($browser) use ($user) {
            $browser
                ->loginAs($user)
                ->visit('/users')
                ->pause(2000)
                ->assertPathIs('/users')
                ->assertSee('Current Registered Users');
        });
    }

    /*
    Method to test user creation for admin
    involves navigation to pages and inputting into several fields
    then confirming the operation was successful
    */

    // Test fails because the user is not logged in

    public function testCreateNewUser()
    {
        // Apparently a new admin can't be created just from the 'create new user' tab
        // You first new to create a user/lecturer - then edit the user choosing 'Set As Admin'
        // and choosing paper(s) from the dropdown, and clicking submit

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
                    ->screenshot('createadmininputs')
                    ->press('SUBMIT')
                    ->assertPathIs('/users')
                    ->assertTitle('Studio Management');
        });
    }

    // Test fails because the user is not logged in at the start

    public function testEditNewUser()
    {
        // Apparently a new admin can't be created just from the 'create new user' tab
        // You first new to create a user/lecturer - then edit the user choosing 'Set As Admin'
        // and choosing paper(s) from the dropdown, and clicking submit

        $this->browse(function ($browser) {
            $browser->visit('/users/4/edit')
                    ->pause(1500)
                    ->screenshot('updateuserscreen')
                    ->assertSee('Update Dusk Admin')
                    ->check('#Admin')
                    ->select('Papers[]', 2)
                    ->screenshot('updateadminfields')
                    ->press('SUBMIT')
                    ->assertPathIs('/users')
                    ->assertSee('DEACTIVATE USER');
        });
    }

    public function testTestNewUser()
    {
        // Now the new admin user has been created, logout of the site
        // and then login as this new user to test admin credentials

        $user = User::where('name', 'Dusk Admin')->first(); // This user does not exist

        $this->browse(function ($browser) use($user) {
            $browser->visit('/')
                    ->pause(1500)
                    ->press('Log Out')
                    ->loginAs($user)
                    ->visit('/')
                    ->assertPathIs('/')
                    ->screenshot('whatnewadmincansee')
                    ->visit('/users')
                    ->assertSee('Dusk Admin')
                    ->screenshot('newadminonuserscreen');
        });
    }
}
