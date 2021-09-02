<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Testing\RefreshDatabase;

class NavTest extends DuskTestCase
{
    
    /* 
        Functions to test each link used in the navigation bar of the app
        i.e. /, /add-student, /cohort, /evidence, /notes, /login
        Each function visits the page and checks if a test word is present
        NB: Update the chrome-driver used for dusk with 'php artisan dusk:chrome-driver'
    */   

    use RefreshDatabase;

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
        $user = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 'password',
            'is_admin' => 1,
        ]);

        $this->browse(function ($browser) use($user) {
            $browser->loginAs($user) 
                    ->visit('/')
                    ->assertPathIs('/');
                                       
        });
        
    }

    public function testHomeLink()
    {
        $user = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 'password',
            'is_admin' => 1,
        ]);

        $this->browse(function ($browser) use($user) {
            $browser->loginAs($user)
                    ->visit('/')
                    ->assertPathIs('/')
                    ->assertSee('Welcome');                    
        });
    }

    public function testNewStudentLink()
    {
        $user = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 'password',
            'is_admin' => 1,
        ]);

        $this->browse(function ($browser) use($user) {
            $browser->loginAs($user)
                    ->visit('/students')
                    ->assertSee('Student Admin');                    
        });
    }

    public function testCohortLink()
    {
        $user = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 'password',
            'is_admin' => 1,
        ]);

        $this->browse(function ($browser) use($user) {
            $browser->loginAs($user)
                    ->visit('/cohorts')
                    ->assertSee('Studio Cohorts');                    
        });
    }

    public function testEvidenceLink()
    {
        $user = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 'password',
            'is_admin' => 1,
        ]);

        $this->browse(function ($browser) use($user) {
            $browser->loginAs($user)
                    ->visit('/evidence')
                    ->assertSee('Evidence');                    
        });
    }

    public function testNotesLink()
    {
        $user = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 'password',
            'is_admin' => 1,
        ]);

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
        $user = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 'password',
            'is_admin' => 1,
        ]);

        $this->browse(function ($browser) use($user) {
            $browser->loginAs($user)
                    ->visit('/')
                    ->click('@loginout')
                    ->assertPathIs('/login')
                    ->assertSee('Password');                    
        });
    }
}
