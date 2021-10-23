<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Laravel\Dusk\Chrome;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LogoutTest extends DuskTestCase
{
    public function test_logout_setup()
    {
        $user = User::factory()->make([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 'password1',
        ]);
    }
    public function test_logout() 
    {
        $user = User::where('name', 'admin')->first();
        $this->browse(function ($browser) {
            $browser
                ->visit('/')
                ->assertPathIs('/login')
                ->loginAs($user)
                ->assertPathIs('/');
        });
    }
        // $this->browse(function ($browser) {
        //     $browser->loginAs(User::find(1))->waitUntilMissing('@loginbtn')->assertSee('Admin');
        // });
        // $this->browse(function ($browser) {
        //     $browser
        //         ->visit('/')
        //         ->waitForLocation('/login')
        //         ->assertPathIs('/login');
        //     $browser->loginAs($user);

            // $browser->type('email', 'taylor@laravel.com');
            //     ->waitForTextIn('email', $user->email)
            //     ->type('password', 'password1')
            //     ->waitForTextIn('password', 'password1')
            //     ->press('@loginbtn');
            // $browser->pause(2000)->assertPathIs('/');
                // ->click('@logout')
                // ->waitForLocation('/login')
                // ->assertPathIs('/login');
            // $browser->loginAs(USER::find(1))->->visit('/home');
            // $browser->pause(3000)->assertPathIs('/');
            // $browser->screenshot('home');
            // $browser
            //     ->Press('Log Out')
            //     ->pause(2000)
            //     ->assertPathIs('/login');
            // $browser->back();
            // $browser->pause(2000)->assertPathIs('/login');
            // $browser->screenshot(
            //     'Successfully Logged Out + Still on Login Page'
            // );
        //});
    // }
}