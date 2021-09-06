<?php

namespace Tests\Browser;

use App\Models\User;
use Database\Factories\UserFactory;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Laravel\Dusk\Chrome;


class CohortViewTest extends DuskTestCase
{
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
    
    public function testFindCohortPage()
    {
        if (User::where('email', '=', 'admin@admin.com')->first() === null) {
            $user = User::factory()->create([
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => 'password',
                'is_admin' => 1,
            ]);
        }
        
        $user = User::where('name', 'admin')->first();

        $this->browse(function ($browser) use($user) {
            $browser->loginAs($user)
                    ->visit('/cohorts')
                    ->assertPathIs('/cohorts')                   
                    ->assertSee('Studio Cohorts');                    
        });
    }

    public function testAllFieldsEmpty()
    {
        if (User::where('email', '=', 'admin@admin.com')->first() === null) {
            $user = User::factory()->create([
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => 'password',
                'is_admin' => 1,
            ]);
        }
        
        $user = User::where('name', 'admin')->first(); 

        $this->browse(function ($browser) use($user) {
            $browser->loginAs($user)
                    ->visit('/cohorts')
                    ->assertPathIs('/cohorts')                   
                    ->press('SAVE')
                    ->assertPathIs('/cohorts');                                
        });
    }

    /* Enter a string of 192 chars into the student field
    NOT CURRENTLY APPLICABLE */
    
    /*
    public function testOverloadStudents()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/cohorts')
                    ->assertPathIs('/cohorts')
                    ->select('paper', '1')
                    ->type('#year', '2021')
                    ->type('#semester', '1')
                    ->type('#stream', 'A') 
                    ->type('#students', 'ugRZiYXP2gEmkf66NINrE6hYMfs6MzvC607MlApY39Uvat2s3qsSgVdMDJ2hNU5AdYyYAqOfnWzXaXZgxI8MRrX09mg28vCUTxWcxGMsjCTXECwAYCXnRfNN5Chz17UKkEwZqdqYrwjUrdcnrPtfAOy5KkT29I8NNrTl9P7MJujusTnNj57XhPpRXqOoAQj5
                    ')             
                    ->press('SAVE')
                    ->assertPathIs('/cohorts');                                
        });
    }
    */

    public function testMakeCohort()
    {
        if (User::where('email', '=', 'admin@admin.com')->first() === null) {
            $user = User::factory()->create([
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => 'password',
                'is_admin' => 1,
            ]);
        }
        
        $user = User::where('name', 'admin')->first(); 

        $this->browse(function ($browser) use($user) {
            $browser->loginAs($user)
                    ->visit('/cohorts')
                    ->assertPathIs('/cohorts')
                    ->select('paper', '1')
                    ->type('#year', '2021')
                    ->type('#semester', '1')
                    ->type('#stream', 'A')                               
                    ->press('SAVE')
                    ->assertPathIs('/cohorts');                                
        });
    }

    /* Feature not on current site */

    /*
    public function testViewCohort()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/cohorts')
                    ->assertPathIs('/cohorts')
                    ->select('paper', '4')
                    ->type('#year', '2025')
                    ->type('#semester', '1')
                    ->type('#stream', 'A')                                    
                    ->press('SAVE')
                    ->assertPathIs('/cohorts')
                    ->clickLink('Snake Charming')
                    ->assertTitle('View Cohort');                                
        });
    }
    */  
    
}
