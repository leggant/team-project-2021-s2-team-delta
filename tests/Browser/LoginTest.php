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
    public function testAdminCanLogin()
    {
        // WARNING : The password needs(?) to be hashed before the
        // 'type' command is used into the login screen
        // the loginAs() command doesn't seem to mind if a user is hashed/encrypted
        $user = User::where('is_admin', 1)->first();
        $this->browse(function ($browser) use ($user) {
            $email = $user->email;
            $browser
                ->visit('/login')
                ->assertPathIs('/login')
                ->value('#email', $email)
                ->type('@password', 'studio2021')
                ->click('button[type="submit"]')
                ->visit('/')
                ->assertPathIs('/')
                ->assertSee('Welcome Administrator')
                ->assertTitle('Studio Management')
                ->screenshot('adminloggedintosite');
        });
    }
}
