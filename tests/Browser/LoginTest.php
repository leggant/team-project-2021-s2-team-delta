<?php

namespace Tests\Browser;

use App\Models\User;
use Database\Factories\UserFactory;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;


class LoginTest extends DuskTestCase
{
    /*
    Testing the login process by creating an admin user
    and entering the email and password into the card/form. The submit
    button is pressed and the path is checked to ensure login has occurred.
    */

    public function testLogin()
    {          
        if (User::where('email', '=', 'admin@admin.com')->first() === null) {
            $user = User::factory()->create([
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => 'password',
                'is_admin' => 1,
            ]);
        }
        
        $user = User::where('name', 'admin')->first();

        $this->browse(function ($browser) use($user) {
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
