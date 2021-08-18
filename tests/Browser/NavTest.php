<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Illuminate\Support\Facades\Hash;

class NavTest extends DuskTestCase
{
    // use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @return void
     */

     /* Commented out to keep for future reference of function layout

        public function testExample()
        {
            $this->browse(function (Browser $browser) {
                $browser->visit('/')
                        ->assertSee('Laravel');
            });
        }
    */

    /* 
        Functions to test each link used in the navigation bar of the app
        i.e. /, /add-student, /cohort, /evidence, /notes, /login
        Each function visits the page and checks if a test word is present
        NB: Update the chrome-driver used for dusk with 'php artisan dusk:chrome-driver'
    */

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
                    ->assertPathIs('/home')                   
                    ->visit('/add-student')
                    ->assertSee('Github:')
                    ->loginAs(User::find(1));          
                    
        });
    }


    public function testHomeLink()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1)) 
                    ->visit('/')
                    ->assertPathIs('/')
                    ->assertSee('Welcome');                    
        });
    }

    public function testNewStudentLink()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/add-student')
                    ->assertSee('Add Student');                    
        });
    }

    public function testCohortLink()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/cohort')
                    ->assertSee('Add Cohort');                    
        });
    }

    public function testEvidenceLink()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/evidence')
                    ->assertSee('Evidence');                    
        });
    }

    public function testNotesLink()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/notes')
                    ->assertSee('Notes');                    
        });
    }

    public function testLogoutLink()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->assertSee('Login');                    
        });
    }
}
