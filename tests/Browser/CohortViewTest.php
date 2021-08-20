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
        $this->createadminuser();

        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                    ->visit('/cohort')
                    ->assertPathIs('/cohort')                   
                    ->assertSee('Add');                    
        });
    }

    public function testAllFieldsEmpty()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/cohort')
                    ->assertPathIs('/cohort')                   
                    ->press('Add')
                    ->assertTitle('Add Cohort');                                
        });
    }

    /* Enter a string of 192 chars into the student field */
    
    public function testOverloadStudents()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/cohort')
                    ->assertPathIs('/cohort')
                    ->type('#subject', 'Studio 4')
                    ->type('#year', '2021')
                    ->type('#semester', '1')
                    ->type('#stream', 'A') 
                    ->type('#students', 'ugRZiYXP2gEmkf66NINrE6hYMfs6MzvC607MlApY39Uvat2s3qsSgVdMDJ2hNU5AdYyYAqOfnWzXaXZgxI8MRrX09mg28vCUTxWcxGMsjCTXECwAYCXnRfNN5Chz17UKkEwZqdqYrwjUrdcnrPtfAOy5KkT29I8NNrTl9P7MJujusTnNj57XhPpRXqOoAQj5
                    ')              
                    ->press('Add')
                    ->assertTitle('Add Cohort');                                
        });
    }
    
    
}
