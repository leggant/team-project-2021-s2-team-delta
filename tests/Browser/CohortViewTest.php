<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Artisan;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Laravel\Dusk\Chrome;
use Illuminate\Support\Facades\Hash;


class CohortViewTest extends DuskTestCase
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
    use DatabaseMigrations;

    public function testFindCohortPage()
    {
        Artisan::call('migrate:fresh');
        Artisan::call('db:seed');
        $user = User::first();
        $this->browse(function (Browser $browser) use ($user) {
            $browser->visit('/login')
                ->assertPathIs('/login')                   
                ->type('email', $user->email)
                ->type('password', 'password')
                ->press('LOG IN')
                ->pause(3000)
                ->visit('/cohorts')
                ->assertPathIs('/cohorts') 
                ->assertSee('Cohort');                    
        });
    }

    public function testAllFieldsEmpty()
    {
        Artisan::call('db:seed');
        $user = User::first();
        $this->browse(function (Browser $browser) use ($user) {
            $browser->visit('/login')
                ->loginAs($user)
                ->visit('/cohorts')
                ->assertPathIs('/cohorts')                   
                ->assertTitle('Studio Management')                             
                ->assertSee('Studio');
        });
    }

    /* Enter a string of 192 chars into the student field */
    
    public function testOverloadStudents()
    {
        Artisan::call('db:seed');
        $user = User::first();
        $this->browse(function (Browser $browser) use ($user) {
            $browser->visit('/login')
            ->loginAs($user)
            ->visit('/cohorts')
            ->assertPathIs('/cohorts')
            // ->type('paper', 'Studio 4')
            // ->type('#year', '2021')
            // ->type('#semester', '1')
            // ->type('#stream', 'A') 
            // ->type('#students', 'ugRZiYXP2gEmkf66NINrE6hYMfs6MzvC607MlApY39Uvat2s3qsSgVdMDJ2hNU5AdYyYAqOfnWzXaXZgxI8MRrX09mg28vCUTxWcxGMsjCTXECwAYCXnRfNN5Chz17UKkEwZqdqYrwjUrdcnrPtfAOy5KkT29I8NNrTl9P7MJujusTnNj57XhPpRXqOoAQj5
            // ')              
            ->assertTitle('Studio Management')                             
            ->click('@save');
        });
    }

    public function testViewCohort()
    {
        Artisan::call('db:seed');
        $user = User::first();
        $this->browse(function ($browser) use ($user) {
            $browser->loginAs($user)
            ->visit('/cohorts')
            ->assertPathIs('/cohorts')
            // ->type('#year', '2025')
            // ->type('#semester', '1')
            // ->type('#stream', 'A')                
            ->assertTitle('Studio Management')                             
            ->click('@save');
        });
    }
}
