<?php

namespace Tests\Browser;

use App\Models\User;
use Database\Factories\UserFactory;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /* 
    Test multiple failed login attempts in a short space of time
    Expecting an error screen with message 429 Too Many Requests.
    then will wait for 60 seconds (retry after delay) so that the next login function 
    can work correctly
    */
    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('migrate:fresh --force');
        $this->artisan('db:seed');
    }

    function testFailedAttempts()
    {
        $user = User::where('name', 'Administrator')->get();
        $this->browse(function ($browser) use ($user)
        {
            $browser->visit('/login')
                    ->assertPathIs('/login');
                    for ($x = 1; $x <= 6; $x++)
                    {
                        $browser->value('#email', 'admin@admin.com')
                                ->type('#password', 'wrongpassword')
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
        $user = User::where('name', 'Administrator')->get();
        $this->browse(function ($browser) use ($user){
            $email = $user[0]->email;
            $browser
                ->visit('/login')
                ->assertPathIs('/login')
                ->value('#email', $email)
                ->type('#password', 'studio2021')
                ->click('#login')
                ->visit('/')
                ->assertPathIs('/')
                ->assertSee('Welcome Administrator')
                ->screenshot('LOGIN_Home Screen');
        });
    }
}
