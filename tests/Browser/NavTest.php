<?php

namespace Tests\Browser;

use App\Models\User;
use database\factories\UserFactory;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NavTest extends DuskTestCase
{
    
    /* 
        Functions to test each link used in the navigation bar of the app
        i.e. /, /add-student, /cohort, /evidence, /notes, /login
        Each function visits the page and checks if a test word is present
        NB: Update the chrome-driver used for dusk with 'php artisan dusk:chrome-driver'
    */   


    public function createUser()
    {
        $user = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 'password',
            'is_admin' => 1,
        ]);
    }

    /* 
    Methods for testing each link on the navigation bar
    to ensure the links point to the right places and the pages exist
    */
    
    public function testBypassLogin()
    {
        $user = User::where('name', 'admin')->first(); 
        $this->browse(function ($browser) use ($user) {
            $browser->visit('/')
                    ->assertPathIs('/login')
                    ->assertSee('LOG IN');                    
        });
    }

    public function testHomeLink()
    {
        $this->browse(function ($browser) use ($user) {
            $browser->visit('/')
                ->assertPathIs('/login')              
                ->type('email', $user->email)
                ->type('password', 'password');
            $browser->screenshot('form-filled');
            $browser->press('LOG IN')
                    ->loginAs($user)
                    ->pause(3000)
                    ->visit('/')
                    ->assertPathIs('/');
            $browser->screenshot('home');
        });
    }

    public function testNewStudentLink()
    {
        $user = User::where('name', 'admin')->first(); 
        $this->browse(function ($browser) use ($user) {
            $browser->loginAs($user)
                ->visit('/students')
                ->assertSee('Students');
            $browser->screenshot('students page');                    
        });
    }

    public function testCohortLink()
    {
        $user = User::where('name', 'admin')->first(); 
        $this->browse(function ($browser) use ($user) {
            $browser->loginAs($user)
                ->visit('/cohorts')
                ->assertSee('Cohorts');
            $browser->screenshot('cohort page');                    
        });
    }

    public function testEvidenceLink()
    {
        $user = User::where('name', 'admin')->first(); 
        $this->browse(function ($browser) use ($user) {
            $browser->loginAs($user)
                ->visit('/uploads')
                ->assertSee('Evidence');  
            $browser->screenshot('evidence page');                  
        });
    }

    public function testNotesLink()
    {
        $user = User::where('name', 'admin')->first(); 
        $this->browse(function ($browser) use ($user) {
            $browser->loginAs($user)
                ->visit('/notes')
                ->assertSee('Notes'); 
            $browser->screenshot('notes page');                   
        });
    }

    public function testAdminLink()
    {
        $user = User::where('name', 'admin')->first(); 
        $this->browse(function ($browser) use ($user) {
            $browser->loginAs($user)
                ->visit('/admin-panel')
                ->assertPathIs('/admin-panel');  
            $browser->screenshot('admin page');                 
        });
    }

    public function testLogoutLink()
    {
        $user = User::where('name', 'admin')->first(); 
        $this->browse(function ($browser) use ($user) {
            $browser->visit('/')
                    ->click('Log Out')
                    ->assertPathIs('/login')
                    ->assertSee('Password');        
            $browser->screenshot('Log Out Clicked');             
        });
    }
}
