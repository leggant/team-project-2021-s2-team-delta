<?php

namespace Tests\Browser;

use App\Models\User;
use Database\Factories\UserFactory;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Illuminate\Support\Facades\Hash;

class LoginTest extends DuskTestCase
{
    /* 
    Test multiple failed login attempts in a short space of time
    Expecting an error screen with message 429 Too Many Requests.
    then will wait for 60 seconds (retry after delay) so that the next login function 
    can work correctly
    */

    function testFailedAttempts()
    {
        $this->browse(function ($browser) 
        {
            $browser->visit('/login')
                    ->assertPathIs('/login');

                    for ($x = 1; $x <= 6; $x++) 
                    {
                        $browser->value('#email', 'admin@admin.com')
                                ->type('@password', 'wrongpassword')
                                ->click('button[type="submit"]')
                                ->pause(2000);     
                    }

            $browser->assertSee('TOO MANY REQUESTS')
                    ->pause(60000);                         
        });          

    }

    /*
    Testing the login process by creating an admin user
    and entering the email and password into the card/form. The submit
    button is pressed and the path is checked to ensure login has occurred.
    */

    public function testLogin()
    {    
        // WARNING : The password needs(?) to be hashed before the 
        // 'type' command is used into the login screen
        // the loginAs() command doesn't seem to mind if a user is hashed/encrypted
        
        /*
        if (User::where('email', '=', 'admin@admin.com')->first() === null) {
            $user = User::factory()->create([
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'),
                'is_admin' => 1,
            ]);
        }
        */

        // $user = User::where('email', 'admin@admin.com')->first();

        $this->browse(function ($browser) 
        {
            $browser->visit('/login')
                    ->assertPathIs('/login')              
                    ->value('#email', 'admin@admin.com')                    
                    ->type('@password', 'password')
                    ->click('button[type="submit"]')
                    ->assertPathIs('/')                   
                    ->visit('/')
                    ->assertSee('Github');
            /*
            Test if another browser instance is also logged in with the first - should NOT be able to.
            Only one browser window should be logged in at a time.
            REMOVED: Simplified log in tests for now
            */
            /*
            $second->visit('/')
                    ->assertPathIs('/');
            */
        });
    }

    /*
    Attempt to replicate an issue where admin user stays logged in if logout button is not pressed
    (even if browser window is closed and app reloaded)
    REMOVED: Simplified log in tests for now
    */

    
}
