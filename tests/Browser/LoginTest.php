<?php

namespace Tests\Browser;

use App\Models\User;
use database\factories\UserFactory;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Illuminate\Support\Facades\Hash;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */

    // use DatabaseMigrations;

    public function createadminuser()
    {
        $user = User::where('email', '=', 'admin@admin.com')->first();
        if ($user === null) {
            $this->user = User::factory()->create([
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('password'),
                'is_admin' => 1,
            ]);
        }
    }    


    /*
    Testing the login process by creating an admin user
    and entering the email and password into the card/form. The submit
    button is pressed and the path is checked to ensure login has occurred.
    */

    public function testLogin()
    {          
        $this->createadminuser();        

        $this->browse(function ($first, $second) {
            $first->visit('/login')
                    ->assertPathIs('/login')              
                    ->value('#email', 'admin@admin.com')                    
                    ->type('@password', 'password')
                    ->click('button[type="submit"]')
                    ->assertPathIs('/home')                   
                    ->visit('/add-student')
                    ->assertSee('Github:');
                    // ->logout();

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
        $this->browse(function (Browser $newbrowser) {
            $newbrowser->visit('/login')                    
                    ->assertPathIs('/login');                    
        });
    }
}
