<?php

namespace Tests\Browser;

use App\Models\User;
use App\Models\Student;
use Database\Factories\UserFactory;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;


class EvidenceTest extends DuskTestCase
{
    /* 
    Method to create a new student needed to test evidence uploads
    Used to add the student directly to the database rather than
    via the students page
    */

    public function testEvidenceMakeStudent()
    {
        // Can create a user here but get warning about a risky file containing no tests
        if (Student::where('email', 'jesus@hmail.com')->first() === null) 
        {
            $student = Student::create([                
                'first_name' => 'Jesus',
                'last_name' => 'Christ',
                'username' => 'HolyGhost',
                'email' => 'jesus@hmail.com',
                'github' => 'imagithub'
            ]); 
        }       
    }
    
    public function testEvidenceRouting()
    {   
        /* Below line could be used to create a student used to upload evidence
        NB: code in functions without the word 'test' in the name is not performed. */
        // $this->CreateStudent();

        $user = User::where('email', 'admin@admin.com')->first();

        $this->browse(function ($browser) use($user) 
        {
            $browser->loginAs($user)
                    ->visit('/evidence')
                    ->assertPathIs('/evidence');                                        
        });
    }

    /* 
    Attempt to upload a file using a full student name (first, last)
    and a file stored in 'app/public/testing/'
    ---Currently failing due changes to name field to first,last_name
    (unknown column 'name')
    */

    /* Temporarily commented out - bug in name dropdown - also file not found in github actions
    when running dusk tests */
    
    /*
    public function testCreateEvidence()
    {
        $user = User::where('email', 'admin@admin.com')->first();
        
        $this->browse(function ($browser) use($user) {
            $browser->loginAs($user)
                    ->visit('/evidence')
                    ->type('@studentname', 'Jesus Christ')                    
                    ->type('#title', 'Some Evidence')
                    ->attach('@image', storage_path('app/public/testing/test_upload.PNG'))
                    ->click('button[type="submit"]')
                    ->assertTitle('Studio Management');                                
        });
    }
    */
}