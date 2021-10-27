<?php

namespace Tests\Browser;

use App\Models\User;
use App\Models\Student;
use Database\Factories\UserFactory;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;


class StudentsTest extends DuskTestCase
{  
    // NOTE : Any student tests will need to added to lecturer or admin access test files
    // This is because roles and assignments need to be done before student features are usable

    /* 
    Currently one placeholder test while waiting
    for CRUD features to be added. 
    Tests for create student and create with duplicate email address
    can be found in file StudentViewTest.php
    Will test delete, update, view/read when those features are available
    */

    public function testStudentPlaceholder()
    {
        // Placeholder test used to prevent errors from empty test file
                       
        $user = User::where('is_admin', 1)->first();

        $this->browse(function ($browser) use($user) {
            $browser->loginAs($user)                    
                    ->visit('/')
                    ->assertTitle('Studio Management');
        });
    }

    /*
    public function testMakeStudent()
    {
        // an admin user logged in and new student info added to feilds
        // successful submit is tested
        // by checking the path and looking for entered data on the page.
                       
        $user = User::where('is_admin', 1)->first();

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
            $browser->visit('/')
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

    // Placeholder functions for future tests of student CRUD features
    
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
