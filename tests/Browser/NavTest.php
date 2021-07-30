<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NavTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @return void
     */

     /*
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel');
        });
    }
    */

    public function testHomeLink()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
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
