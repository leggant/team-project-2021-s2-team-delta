<?php

namespace Tests\Browser;

use App\Models\User;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class NavTest extends DuskTestCase
{       
    // Old method for user creation used before logins were created in the seeders
    /*
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
    */   

    /* 
        Functions to test each link used in the navigation bar of the app
        i.e. /, /add-student, /cohort, /evidence, /notes, /login
        Each function visits the page and checks if a test word is present
        NB: Update the chrome-driver used for dusk with 'php artisan dusk:chrome-driver'
    */   
    
    public function testBypassLogin()
    {
        // Login as an admin user

        $user = User::where('is_admin', 1)->first();

        $this->browse(function (Browser $browser) use($user)
        {
            // Should only need to loginAs once per test file
            $browser->loginAs($user) 
                    ->visit('/')
                    ->assertPathIs('/')
                    ->assertTitle('Studio Management')
                    ;
        });
        
    }

    public function testHomeLink()
    {
        $this->browse(function (Browser $browser) 
        {
            $browser
                    ->visit('/')
                    ->assertPathIs('/')
                    ->assertSee('ADD NEW STUDENT')
                    ->assertTitle('Studio Management')
                    ;                    
        });
    }

    // New Student link removed - its now a component used on the home route / students page
    /*
    public function testNewStudentLink()
    {
        

        $this->browse(function ($browser) 
        {
            $browser//->loginAs($user)
                    ->visit('/')
                    ->assertSee('Student Admin');                    
        });
    }
    */

    public function testEvidenceLink()
    {
        // Also known as 'Uploads'
        

        $this->browse(function ($browser) 
        {
            $browser->visit('/evidence')
                    ->assertPathIs('/evidence')
                    ->assertSee('UPLOAD FILES')
                    ->assertTitle('Studio Management')
                    ;                    
        });
    }

    public function testNotesLink()
    {
        $this->browse(function ($browser) 
        {
            $browser->visit('/notes')
                    ->assertPathIs('/notes')
                    ->assertSee('SAVE NOTE')
                    ->assertTitle('Studio Management')
                    ;                    
        });
    }

    public function testCohortsLink()
    {
        // This link should only be present in the nav for admin users

        $this->browse(function ($browser) 
        {
            $browser->visit('/cohorts')
                    ->assertPathIs('/cohorts')
                    ->assertSee('Studio Cohorts')
                    ->assertTitle('Studio Management')
                    ;                    
        });
    }    
    
    public function testAdminLink()
    {
        // A link that should only be available to admins

        $this->browse(function (Browser $browser) 
        {
            $browser->visit('/users')
                    ->assertPathIs('/users')
                    ->assertSee('CREATE NEW USER')
                    ->assertTitle('Studio Management')
                    ;                    
        });
    }    

    public function testLogoutLink()
    {
        $this->browse(function ($browser) 
        {
            $browser->visit('/')
                    ->press('Log Out')
                    ->pause(1500)
                    ->assertPathIs('/login')
                    ->assertSee('Password')
                    ->assertTitle('Studio Management')
                    ->assertSee('LOG IN')
                    ;                    
        });
    }
}
