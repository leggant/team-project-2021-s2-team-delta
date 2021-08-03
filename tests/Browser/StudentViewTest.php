<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class StudentViewTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * A Dusk test example.
     *
     * @return void
     */
    
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/add-student')
                ->type('name','John Doe')
                ->type('email','John@gmail.com')
                ->type('github','JohnD')
                ->press('+')
                ->assertPathIs('/');
        });
    }
}