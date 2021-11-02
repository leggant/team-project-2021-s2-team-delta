<?php

namespace Tests\Browser;

use App\Models\User;
use Database\Factories\UserFactory;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    public function testAdminCanLogin()
    {    
        // WARNING : The password needs(?) to be hashed before the 
        // 'type' command is used into the login screen
        // the loginAs() command doesn't seem to mind if a user is hashed/encrypted

        $user = User::where('is_admin', 1)->first();
        $this->browse(function ($browser) use ($user)
        {
            $email = $user->email;
            $browser->visit('/login')
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