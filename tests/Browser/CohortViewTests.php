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
    Create the tables of the database and 
    seed the users to create an admin login
    */
    
    /*
    public function migrateandseed()
    {
        $this->artisan('migrate:fresh');
        $this->artisan('db:seed');
    }
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
    
    public function testFindPage()
    {
        $this->createadminuser();

        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                    ->visit('/cohort')
                    ->assertPathIs('/cohort')                   
                    ->assertSee('Add');                    
        });
    }
    
}
