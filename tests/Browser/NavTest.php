<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Laravel\Dusk\Chrome;
use App\Models\User;

class NavTest extends DuskTestCase
{       
    /* 
        Functions to test each link used in the navigation bar of the app
        i.e. /, /add-student, /cohort, /evidence, /notes, /login
        Each function visits the page and checks if a test word is present
        NB: Update the chrome-driver used for dusk with 'php artisan dusk:chrome-driver'
    */
    // public function testBypassLogin()
    // {
    //     $user = User::where('is_admin', 1)->first();
    //     $this->browse(function (Browser $browser) use($user)
    //     {
    //         // Should only need to loginAs once per test file
    //         $browser->loginAs($user) 
    //                 ->visit('/')
    //                 ->assertPathIs('/')
    //                 ->assertTitle('Studio Management');
    //     });
    // }
        // USER IS NEVER LOGGED IN SO THIS TEST FAILS 
    // public function testHomeLink()
    // {
    //     $user = User::where('name', 'Administrator')->get();
    //     $this->browse(function ($browser) use($user)
    //     {
    //         $email = $user[0]->email;
    //         $browser
    //                 ->visit('/')
    //                 ->assertPathIs('/')
    //                 ->assertSee('ADD NEW STUDENT')
    //                 ->assertTitle('Studio Management');                    
    //     });
    // }
    // USER IS NEVER LOGGED IN SO THIS TEST FAILS 
    // public function testEvidenceLink()
    // {
    //     $this->browse(function ($browser) 
    //     {
    //         $browser->visit('/evidence')
    //                 ->assertPathIs('/evidence')
    //                 ->assertSee('UPLOAD FILES')
    //                 ->assertTitle('Studio Management');                    
    //     });
    // }
    // USER IS NEVER LOGGED IN SO THIS TEST FAILS 
    // public function testNotesLink()
    // {
    //     $this->browse(function ($browser) 
    //     {
    //         $browser->visit('/notes')
    //                 ->assertPathIs('/notes')
    //                 ->assertSee('SAVE NOTE')
    //                 ->assertTitle('Studio Management');                    
    //     });
    // }
    // USER IS NEVER LOGGED IN SO THIS TEST FAILS 
    // public function testCohortsLink()
    // {
    //     $this->browse(function ($browser) 
    //     {
    //         $browser->visit('/cohorts')
    //                 ->assertPathIs('/cohorts')
    //                 ->assertSee('Studio Cohorts')
    //                 ->assertTitle('Studio Management');                    
    //     });
    // }    
    // USER IS NEVER LOGGED IN SO THIS TEST FAILS 
    // public function testAdminLink()
    // {
    //     // A link that should only be available to admins
    //     $this->browse(function (Browser $browser) 
    //     {
    //         $browser->visit('/users')
    //                 ->assertPathIs('/users')
    //                 ->assertSee('CREATE NEW USER')
    //                 ->assertTitle('Studio Management');                    
    //     });
    // }    
    // USER IS NEVER LOGGED IN SO THIS TEST FAILS    
    // public function testLogoutLink()
    // {
    //     $this->browse(function ($browser) 
    //     {
    //         $browser->visit('/')
    //                 ->press('Log Out')
    //                 ->pause(1500)
    //                 ->assertPathIs('/login')
    //                 ->assertSee('Password')
    //                 ->assertTitle('Studio Management')
    //                 ->assertSee('LOG IN');                    
    //     });
    // }

    public function testNavLinks()
    {
        $user = User::where('name', 'Administrator')->get();
        $this->browse(function ($browser) use($user)
        {
            $email = $user[0]->email;
            $browser
                ->visit('/login')
                ->assertPathIs('/login')
                ->value('#email', $email)
                ->type('#password', 'studio2021')
                ->click('#login')
                # Home Page
                ->visit('/')
                ->pause(2000)
                ->screenshot('HOMELINK_home')
                ->assertPathIs('/')
                ->assertSee('Student Admin')
                ->pause(2000)
                # student page
                ->click('#students')
                ->pause(1500)
                // ->assertPathIs('/students')
                ->assertSee('Welcome Administrator')
                ->screenshot('STUDENT_page')
                ->pause(1500)
                # evidence page
                ->click('#evidence')
                ->pause(1500)
                ->assertPathIs('/evidence')
                ->screenshot('EVIDENCE_LINK')
                ->pause(1500)
                # notes page
                ->click('#notes')
                ->pause(1500)
                ->assertPathIs('/notes')
                ->screenshot('Notes_page')
                ->assertSee('SAVE NOTE')
                ->pause(1500)
                # cohort page
                ->click('#cohorts')
                ->assertPathIs('/cohorts')
                ->screenshot('Cohorts_page')
                ->assertSee('Studio Cohorts')
                ->pause(1500)
                # admin page
                ->click('#admin')
                ->pause(1500)
                ->assertPathIs('/users')
                ->screenshot('Admin_page')
                ->assertSee('Current Registered Users')
                #home page
                ->click('#home')
                ->pause(1500)
                ->assertPathIs('/')
                ->screenshot('Home_page')
                ->pause(1500)
                #logout
                ->click('#logout')
                ->pause(1500)
                ->assertPathIs('/login')
                ->assertSee('Password')
                ->assertSee('Email');
        });
    }
}
