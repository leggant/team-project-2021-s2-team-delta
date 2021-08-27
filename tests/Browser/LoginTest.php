<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Laravel\Dusk\Browser;
use Laravel\Dusk\Chrome;
use Tests\DuskTestCase;
use Illuminate\Support\Facades\Hash;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */

    use RefreshDatabase;
  
    /*
    Testing the login process by creating an admin user
    and entering the email and password into the card/form. The submit
    button is pressed and the path is checked to ensure login has occurred.
    */

    public function testLogin()
    {          
        $user = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'is_admin' => 1,
            'password' => Hash::make('admin')
        ]);
        $this->browse(function ($first, $second) use ($user) {
            $first->visit('/login')
                    ->assertPathIs('/login') 
                    ->loginAs($user)             
                    // ->press(' Log In ')
                    ->visit('/')
                    ->assertPathIs('/')                  
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
        $user = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'is_admin' => 1,
            'password' => Hash::make('admin')
        ]);
        $this->browse(function ($browser) {
            $browser->visit('/login')                    
                    ->assertPathIs('/login');                    
        });
    }
}
