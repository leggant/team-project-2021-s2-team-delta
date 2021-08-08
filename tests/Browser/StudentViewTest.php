<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

class StudentViewTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * A Dusk test example.
     *
     * @return void
     */
    
    public function testStudentUpload()
    {
        //make sure a user is created on your local enviroment before running this test
        //have to be logged in as a user

        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                //->visit('/login')
                //->assertPathIs('/login')
                //->type('email','admin@admin.com')
                //->type('password','P@ssw0rd')
                //->press('#log-in')
                //->assertPathIs('/')
                ->visit('/add-student')
                ->type('name','John Doe')
                ->type('email','John@gmail.com')
                ->type('github','JohnD')
                ->press('+')
                ->assertPathIs('/')
                ->assertSeeIn('#studentTable > tbody > tr:nth-child(2) > td:nth-child(1)','John Doe')
                ->assertSeeIn('#studentTable > tbody > tr:nth-child(2) > td:nth-child(2)','John@gmail.com')
                ->assertSeeIn('#studentTable > tbody > tr:nth-child(2) > td:nth-child(3)','JohnD');
        });
    }
}
