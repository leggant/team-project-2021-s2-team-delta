<?php

namespace Tests\Browser;

use App\Models\User;
use database\factories\UserFactory;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Illuminate\Support\Facades\Hash;

class LoginTest extends DuskTestCase
{
    public function createUser()
    {
        $user = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 'password',
            'is_admin' => 1,
        ]);
    }

    /*
    Testing the login process by creating an admin user
    and entering the email and password into the card/form. The submit
    button is pressed and the path is checked to ensure login has occurred.
    */

    public function testLogin()
    {          
        $user = User::where('name', 'admin')->first();       

        $this->browse(function ($first, $second) use ($user) {
                $first->visit('/login')
                    ->assertPathIs('/login')              
                    ->type('email', $user->email)
                    ->type('password', 'password');
                $first->screenshot('form-filled');
                $first->press('LOG IN')
                        ->loginAs($user)
                        ->pause(3000)
                        ->visit('/')
                        ->assertPathIs('/');
                $first->screenshot('home');

            /*
            Test if another browser instance is also logged in with the first - should NOT be able to.
            Only one browser window should be logged in at a time.
            */

            $second->visit('/login')
                    ->assertPathIs('/login');
        });
    }

    /*
    Attempt to replicate an issue where admin user stays logged in if logout button is not pressed
    (even if browser window is closed and app reloaded)
    */

    public function testIsLoggedOut()
    {
        $user = User::where('name', 'admin')->first(); 
        $this->browse(function ($browser) {
        $browser->loginAs($user)->visit('/')
                ->assertPathIs('/');
        $browser->screenshot('home-page');
        $browser->click('Log Out')                    
                ->assertPathIs('/login');
        $browser->screenshot('browser logged out');                   
        });
    }
}
