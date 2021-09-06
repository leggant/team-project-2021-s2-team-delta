<?php

namespace Tests\Browser;

use App\Models\User;
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

    /* 
    Methods for testing each link on the navigation bar
    to ensure the links point to the right places and the pages exist
    */
    
    public function testBypassLogin()
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
                    ->visit('/')
                    ->assertPathIs('/');
                                       
        });
        
    }

    public function testHomeLink()
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
                    ->visit('/')
                    ->assertPathIs('/')
                    ->assertSee('Welcome');                    
        });
    }

    public function testNewStudentLink()
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
                    ->visit('/students')
                    ->assertSee('Student Admin');                    
        });
    }

    public function testCohortLink()
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
                    ->assertSee('Studio Cohorts');                    
        });
    }

    public function testEvidenceLink()
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
                    ->visit('/evidence')
                    ->assertSee('Evidence');                    
        });
    }

    public function testNotesLink()
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
                    ->visit('/notes')
                    ->assertSee('Notes');                    
        });
    }
    
    /*
    public function testAdminLink()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin-panel')
                    ->assertSee('Manage');                    
        });
    }
    */

    public function testLogoutLink()
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
                    ->visit('/')
                    ->press('Log Out')
                    ->assertPathIs('/login')
                    ->assertSee('Password');                    
        });
    }
}
