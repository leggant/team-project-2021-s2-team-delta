<?php

namespace Tests\Browser;

use App\Models\User;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class NavTest extends DuskTestCase
{    
    /* 
        Functions to test each link used in the navigation bar of the app
        i.e. /, /add-student, /cohort, /evidence, /notes, /login
        Each function visits the page and checks if a test word is present
        NB: Update the chrome-driver used for dusk with 'php artisan dusk:chrome-driver'
    */   

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
    Methods for testing each link on the navigation bar
    to ensure the links point to the right places and the pages exist
    */
    
    public function testBypassLogin()
    {
        // $this->createadminuser();

        $user = User::where('email', 'admin@admin.com')->first();

        $this->browse(function (Browser $browser) use($user)
        {
            // Should only need to loginAs once per test file
            $browser->loginAs($user) 
                    ->visit('/')
                    ->assertPathIs('/');                                       
        });
        
    }

    public function testHomeLink()
    {
        $this->browse(function (Browser $browser) 
        {
            $browser
                    ->visit('/')
                    ->assertPathIs('/')
                    ->assertSee('ADD NEW STUDENT');                    
        });
    }

    public function testNewStudentLink()
    {
        /*
        if (User::where('email', '=', 'admin@admin.com')->first() === null) {
            $user = User::factory()->create([
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => 'password',
                'is_admin' => 1,
            ]);
        }
        
        $user = User::where('name', 'admin')->first();
        */

        $this->browse(function ($browser) 
        {
            $browser//->loginAs($user)
                    ->visit('/')
                    ->assertSee('Student Admin');                    
        });
    }

    public function testEvidenceLink()
    {
        // Also known as 'Uploads'
        /*
        if (User::where('email', '=', 'admin@admin.com')->first() === null) {
            $user = User::factory()->create([
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => 'password',
                'is_admin' => 1,
            ]);
        }
        
        $user = User::where('name', 'admin')->first();
        */

        $this->browse(function ($browser) 
        {
            $browser//->loginAs($user)
                    ->visit('/evidence')
                    ->assertPathIs('/evidence')
                    ->assertSee('UPLOAD');                    
        });
    }

    public function testNotesLink()
    {
        /*
        if (User::where('email', '=', 'admin@admin.com')->first() === null) {
            $user = User::factory()->create([
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => 'password',
                'is_admin' => 1,
            ]);
        }
        
        $user = User::where('name', 'admin')->first(); 
        */

        $this->browse(function ($browser) 
        {
            $browser//->loginAs($user)
                    ->visit('/notes')
                    ->assertPathIs('/notes')
                    ->assertSee('SAVE NOTE');                    
        });
    }

    public function testCohortLink()
    {
        /*
        if (User::where('email', '=', 'admin@admin.com')->first() === null) {
            $user = User::factory()->create([
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => 'password',
                'is_admin' => 1,
            ]);
        }
        
        $user = User::where('name', 'admin')->first(); 
        */

        $this->browse(function ($browser) 
        {
            $browser//->loginAs($user)
                    ->visit('/cohorts')
                    ->assertPathIs('/cohorts')
                    ->assertSee('Studio Cohorts');                    
        });
    }    
    
    public function testAdminLink()
    {
        $this->browse(function (Browser $browser) 
        {
            $browser->visit('/admin-panel')
                    ->assertPathIs('/admin-panel')
                    ->assertSee('MANAGE');                    
        });
    }    

    public function testLogoutLink()
    {
        /*
        if (User::where('email', '=', 'admin@admin.com')->first() === null) {
            $user = User::factory()->create([
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => 'password',
                'is_admin' => 1,
            ]);
        }
        
        $user = User::where('name', 'admin')->first();
        */

        $this->browse(function ($browser) 
        {
            $browser//->loginAs($user)
                    ->visit('/')
                    ->press('Log Out')
                    ->assertPathIs('/login')
                    ->assertSee('Password');                    
        });
    }
}
