<?php

namespace Tests\Browser;

use App\Models\User;
use Database\Factories\UserFactory;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class StudentViewTest extends DuskTestCase
{
    public function createUser()
    {
        $user = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 'password',
            'is_admin' => 1,
        ]);
    }

    public function testStudentUpload()
    {
        // an admin user is created and logged in
        // the test visits the add-student page and enters data into the fields
        // the Add/+ button is pressed to submit the data. Success submit is tested
        // by checking the path and looking for entered data on the page.

        $user = User::where('name', 'admin')->first();       
        $this->browse(function ($browser) use ($user) {
            $browser->loginAs($user)->visit('/students')
                    ->assertPathIs('/students')
                    ->type('first_name','John')
                    ->type('last_name','Doe')
                    ->type('username','JD1234')
                    ->type('email','John@gmail.com')
                    ->type('github','JohnD');
            $browser->screenshot('Student Form Filled');
            $browser->press('ADD NEW STUDENT')
                    ->assertPathIs('/students')
                    ->assertSee('John Doe')
                    ->assertSee('John@gmail.com')
                    ->assertSee('JohnD');
            $browser->screenshot('New Student');
        });
    }

    public function testDuplicateEmail()
    {
        /* 
        Test for bug with non-unique email address e.g use the same email address again for a new record
        This test is expected to fail if checks aren't done on the email address field
         */
        $user = User::where('name', 'admin')->first();

        $this->browse(function ($browser) use($user) {
            $browser->loginAs($user)
                    ->visit('/students')
                    ->assertPathIs('/students')
                    ->type('#first_name','John')
                    ->type('#last_name', 'Doe')
                    ->type('#id', '666666666')
                    ->type('#email','John@gmail.com')
                    ->type('#github','JohnD')
                    ->press('ADD NEW STUDENT')
                    ->assertTitle('Studio Management');                    
        });
    }
}
