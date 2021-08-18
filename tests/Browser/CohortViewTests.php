<?php

namespace Tests\Browser;

use App\Models\User;

use database\factories\UserFactory;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Illuminate\Support\Facades\Hash;


class CohortViewTests extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    /*
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel');
        });
    */

    
    // use HasFactory;
    use DatabaseMigrations;
    
    /* 
    Create the tables of the database and 
    seed the users to create an admin login
    */
    
    public function migrateandseed()
    {
        $this->artisan('migrate');
        $this->artisan('db:seed');
    }       

    public function createadminuser()
    {
      $this->user = User::factory()->create([
        'name' => 'admin',
        'email' => 'admin@admin.com',
        'password' => Hash::make('password'),
        'is_admin' => 1,
      ]);
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
                    
                    ->assertPathIs('/home');                    
                    
        });
    }
    
}
