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

    public function createadminuser()
    {
        $user = User::where('email', '=', 'admin@admin.com');
        if ($user === null)
        {
            $this->user = User::factory()->create([
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('password'),
                'is_admin' => 1,
            ]);
        }
    }    

    public function testLogin()
    {          
        $this->createadminuser();        

        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->assertPathIs('/login')              
                    ->value('#email', 'admin@admin.com')                    
                    ->type('@password', 'password')
                    ->click('button[type="submit"]')
                    ->assertPathIs('/home')                   
                    ->visit('/add-student')
                    ->assertSee('Github:');
                    // ->loginAs(User::find(1));          
                    
        });
    }
}
