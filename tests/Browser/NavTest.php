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
    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('migrate:fresh --force');
        $this->artisan('db:seed');
    }

    /* 
    Methods for testing each link on the navigation bar
    to ensure the links point to the right places and the pages exist
    */
    
    public function testBypassLogin()
    {
        $user = User::where('name', 'Administrator')->get();
        $this->browse(function ($browser1) use($user)
        {
            $email = $user[0]->email;
            $browser1
                ->visit('/login')
                ->assertPathIs('/login')
                ->value('#email', $email)
                ->type('#password', 'studio2021')
                ->click('#login')
                ->visit('/')
                ->assertPathIs('/')
                ->pause(2000);                                   
        });
    }

    public function testHomeLink()
    {
        $user = User::where('name', 'Administrator')->get();
        $this->browse(function ($browser2) use($user)
        {
            $email = $user[0]->email;
            $browser2
                ->visit('/login')
                ->assertPathIs('/login')
                ->value('#email', $email)
                ->type('#password', 'studio2021')
                ->click('#login')
                ->visit('/')
                ->pause(2000)
                ->screenshot('HOMELINK_home')
                ->assertPathIs('/')
                ->assertSee('Admin')
                ->pause(2000);          
        });
    }

    public function testNewStudentLink()
    {
        $user = User::where('name', 'Administrator')->get();
        $this->browse(function ($browser3) use($user)
        {
            $email = $user[0]->email;
            $browser3
                ->visit('/login')
                ->assertPathIs('/login')
                ->value('#email', $email)
                ->type('#password', 'studio2021')
                ->click('#login')
                ->pause(2000)
                ->assertPathIs('/')
                ->assertSee('Student Admin')
                ->click('#students')
                ->pause(2000)
                ->screenshot('STUDENT_page')
                ->pause(2000);
        });
    }

    public function testEvidenceLink()
    {
        $user = User::where('name', 'Administrator')->get();
        $this->browse(function ($browser4) use($user)
        {
            $email = $user[0]->email;
            $browser4
                ->visit('/login')
                ->assertPathIs('/login')
                ->value('#email', $email)
                ->type('#password', 'studio2021')
                ->click('#login')
                ->pause(2000)
                ->screenshot('EVIDENCE_ERROR')
                ->assertSee('Uploads')
                ->click('#evidence')
                ->pause(1500)
                ->assertPathIs('/evidence')
                ->screenshot('EVIDENCE_LINK')
                ->pause(2000);   
        });
    }

    // public function testNotesLink()
    // {
    //     $user = User::where('name', 'Administrator')->get();
    //     $this->browse(function ($browser) use($user)
    //     {
    //         $email = $user[0]->email;
    //         $browser
    //             ->visit('/login')
    //             ->assertPathIs('/login')
    //             ->value('#email', $email)
    //             ->type('#password', 'studio2021')
    //             ->click('#login')
    //             ->visit('/notes')
    //             ->assertPathIs('/notes')
    //             ->assertSee('SAVE NOTE');                    
    //     });
    // }

    // public function testCohortLink()
    // {
    //     $user = User::where('name', 'Administrator')->get();
    //     $this->browse(function ($browser) use($user)
    //     {
    //         $email = $user[0]->email;
    //         $browser
    //             ->visit('/login')
    //             ->assertPathIs('/login')
    //             ->value('#email', $email)
    //             ->type('#password', 'studio2021')
    //             ->click('#login') 
    //             ->visit('/cohorts')
    //             ->assertPathIs('/cohorts')
    //             ->assertSee('Studio Cohorts');                    
    //     });
    // }    
    
    // public function testAdminLink()
    // {
    //     $user = User::where('name', 'Administrator')->get();
    //     $this->browse(function ($browser) use($user)
    //     {
    //         $email = $user[0]->email;
    //         $browser
    //             ->visit('/login')
    //             ->assertPathIs('/login')
    //             ->value('#email', $email)
    //             ->type('#password', 'studio2021')
    //             ->click('#login') 
    //             ->visit('/admin-panel')
    //             ->pause(1500)
    //             ->assertPathIs('/admin-panel')
    //             ->assertSee('MANAGE');                    
    //     });
    // }    

    // public function testLogoutLink()
    // {
    //     $user = User::where('name', 'Administrator')->get();
    //     $this->browse(function ($browser) use($user)
    //     {
    //         $email = $user[0]->email;
    //         $browser
    //             ->visit('/login')
    //             ->assertPathIs('/login')
    //             ->value('#email', $email)
    //             ->type('#password', 'studio2021')
    //             ->click('#login')
    //             ->pause(2000)
    //             ->waitUntilMissing('#login')
    //             ->screenshot('LOGOUTLINK_home')
    //             ->assertSee('Student Admin')
    //             ->click('#logout')
    //             ->pause(1000)
    //             ->assertPathIs('/login')
    //             ->assertSee('password')
    //             ->assertSee('email');                  
    //     });
    // }
}
