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
            $browser->visit('/add-student')
                    ->assertPathIs('/add-student')
                    ->type('#name','John Doe')
                    ->type('#email','John@gmail.com')
                    ->type('#github','JohnD')
                    ->press('+')
                    ->assertPathIs('/home')
                    ->assertSee('John Doe')
                    ->assertSee('John@gmail.com')
                    ->assertSee('JohnD');
        });
    }
}
