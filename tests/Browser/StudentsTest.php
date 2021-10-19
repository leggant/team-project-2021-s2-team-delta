<?php

namespace Tests\Browser;

use App\Models\User;
use App\Models\Student;
use Database\Factories\UserFactory;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;


class StudentsTest extends DuskTestCase
{    
    /* 
    Currently one placeholder test while waiting
    for CRUD features to be added. 
    Tests for create student and create with duplicate email address
    can be found in file StudentViewTest.php
    Will test delete, update, view/read when those features are available
    */

    public function testMakeStudent()
    {
        // an admin user is created and logged in
        // the test visits the add-student page and enters data into the fields
        // the Add/+ button is pressed to submit the data. Success submit is tested
        // by checking the path and looking for entered data on the page.
                       
        $user = User::where('email', 'admin@admin.com')->first();

        $this->browse(function ($browser) use($user) {
            $browser->loginAs($user)                    
                    ->visit('/')
                    ->assertPathIs('/')
                    ->type('#first_name','John')
                    ->type('#last_name', 'Doe')
                    ->type('#id', '666666666')
                    ->type('#github','JohnD')
                    //->type('#email','John@gmail.com')                    
                    ->press('ADD NEW STUDENT')
                    ->pause(2000)
                    ->assertTitle('Studio Management')
                    ->assertSee('Profile')
                    ->assertSee('John Doe')
                    ->assertSee('666666666@student.op.ac.nz');
                    //->assertSee('John@gmail.com')
                    //->assertSee('JohnD');
        });
    }

    
    public function testDuplicateEmail()
    {
        
        // Test for bug with non-unique email address e.g use the same username again for a new record
        // The email address is a combination of the username/id and '@student.op.ac.nz'
        // This test is expected to fail if checks aren't done on the email address field        

        $this->browse(function ($browser)  
        {
            $browser//->loginAs($user)
                    ->visit('/')
                    ->assertPathIs('/')
                    ->type('#first_name','David')
                    ->type('#last_name', 'Doe')
                    ->type('#id', '666666666')
                    //->type('#email','John@gmail.com')
                    //->type('#github','JohnD') - No longer a required field
                    ->press('ADD NEW STUDENT')
                    ->assertSee('The username has already been taken.');                    
        });
    }

    // Placeholder functions for future tests of student features
    
    /*
    public function testReadStudent()
    {
        $this->createadminuser();

        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                    ->visit('/students')
                    ->assertPathIs('/students');                    
        });
    }

    public function testUpdateStudent()
    {
        $this->createadminuser();

        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                    ->visit('/students')
                    ->assertPathIs('/students');                    
        });
    }

    public function testDeleteStudent()
    {
        $this->createadminuser();

        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                    ->visit('/students')
                    ->assertPathIs('/students');                    
        });
    }
    */
}
