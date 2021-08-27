<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
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
    use RefreshDatabase;

    public function testFindCohortPage()
    {
        $user = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'is_admin' => 1,
            'password' => 'password'
        ]);
        $this->browse(function ($browser) use ($user) {
            $browser->loginAs($user)
            ->visit('/cohorts')
            ->assertPathIs('/login')                   
            ->assertSee('Studio');                    
        });
    }

    public function testAllFieldsEmpty()
    {
        $user = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'is_admin' => 1,
            'password' => 'password'
        ]);
        $this->browse(function ($browser) use ($user) {
            $browser->loginAs($user)
                ->visit('/cohorts')
                ->assertPathIs('/cohorts')                   
                ->assertTitle('Studio Management')                             
                ->assertSee('Studio');
        });
    }

    /* Enter a string of 192 chars into the student field */
    
    public function testOverloadStudents()
    {
        $user = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'is_admin' => 1,
            'password' => 'password'
        ]);
        $this->browse(function ($browser) use ($user) {
            $browser->loginAs($user)
            ->visit('/cohorts')
            ->assertPathIs('/cohorts')
            // ->type('paper', 'Studio 4')
            // ->type('#year', '2021')
            // ->type('#semester', '1')
            // ->type('#stream', 'A') 
            // ->type('#students', 'ugRZiYXP2gEmkf66NINrE6hYMfs6MzvC607MlApY39Uvat2s3qsSgVdMDJ2hNU5AdYyYAqOfnWzXaXZgxI8MRrX09mg28vCUTxWcxGMsjCTXECwAYCXnRfNN5Chz17UKkEwZqdqYrwjUrdcnrPtfAOy5KkT29I8NNrTl9P7MJujusTnNj57XhPpRXqOoAQj5
            // ')              
            ->press('Save')
            ->assertTitle('Studio Management');                                
        });
    }

    public function testViewCohort()
    {
        $user = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'is_admin' => 1,
            'password' => 'password'
        ]);
        $this->browse(function ($browser) use ($user) {
            $browser->loginAs($user)
            ->visit('/cohorts')
            ->assertPathIs('/cohorts')
            ->type('#year', '2025')
            ->type('#semester', '1')
            ->type('#stream', 'A')                
            ->press('Save')
            ->assertTitle('Studio Management');                                
        });
    }
}
