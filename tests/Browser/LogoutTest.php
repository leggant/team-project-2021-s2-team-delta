<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Laravel\Dusk\Chrome;
use App\Models\User;

class LogoutTest extends DuskTestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('migrate:fresh --force');
        $this->artisan('db:seed');
    }
    public function test_logout() 
    {
        $user = User::where('name', 'Administrator')->get();
        $this->browse(function ($browser) use ($user) {
            $email = $user[0]->email;
            $browser
                ->visit('/login')
                ->assertPathIs('/login')
                ->type('#email', $email)
                ->type('#password', 'studio2021')
                ->click('#login')
                ->assertSee('Welcome Administrator')
                ->screenshot('home')
                ->pause(3000)
                ->click('#logout')
                ->assertPathIs('/login')
                ->pause(1000)
                ->back()
                ->assertPathIs('/login')
                ->screenshot('logout');
        });
    }
}