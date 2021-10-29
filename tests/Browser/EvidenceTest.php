<?php

namespace Tests\Browser;

use App\Models\User;
use App\Models\Student;
use App\Models\Cohort;
use Database\Factories\CohortFactory;
use Database\Factories\StudentFactory;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Illuminate\Support\Facades\DB;


class EvidenceTest extends DuskTestCase
{
    /*
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
    */

    /*
    The function below creates a cohort (studio 1, 2021-01-01, Semester 2, Stream J),
    a Student for that cohort (Jim Smith, UseThisName, johnsmith@gmail.com, johnsgit)
    and assigns Studio 1 to the admin user (studioadmin@op.ac.nz)
    You can now use the student in evidence tests
    */
    
    public function testEvidenceCreateUsableStudent()
    {           
        $cohort = Cohort::factory()->create([
            'id' => 1,
            'paper_id' => 2,    // Studio 1
            'year' => '2021-01-01',
            'semester' => 'Semester 2',
            'stream' => 'J'
        ]);
        
        $newstudent = Student::factory()->create([
            'id' => 1,
            'first_name' => 'Jim',
            'last_name' => 'Smith',
            'username' => 'UseThisName',
            'email' => 'johnsmith@gmail.com',
            'github' => 'johnsgit',
            'cohort_id' => 1,   // The cohort created above
            'is_active' => 1
        ]);

        DB::table('user_papers')->insert(
            [
                'id' => 1,
                'user_id' => 1, // The student/user created above
                'paper_id' => 2,    // With paper_id matching the one in cohort above
            ]
        );

        $this->assertTrue(true);        
    }

    public function testEvidenceAdminAccess()
    {   
        $user = User::where('is_admin', 1)->first();

        $this->browse(function ($browser) use($user) 
        {
            $browser->loginAs($user)
                    ->visit('/evidence')
                    ->assertPathIs('/evidence')
                    ->assertTitle('Studio Management')
                    ->assertSee('UPLOAD FILES');                                        
        });
    }

    /* 
    Attempt to upload a file using a student from the dropdown selector
    on the evidence blade. Chooses the first student in the dropdown (select statement)
    and attaches a file stored in '/tests/Browser/testupload/'    
    */ 

    // https://www.codegrepper.com/code-examples/php/laravel+get+root+path
    
    /*
    public function testCreateEvidence()
    {        
        $this->browse(function ($browser) 
        {            
            $browser->visit('/evidence')
                    ->select('#student', 1)                    
                    ->type('#title', 'Some Evidence')
                    ->type('#description', 'This is a description of the evidence uploaded which has been typed into a textarea box')
                    ->attach('@image', realpath('.').'/tests/Browser/testupload/test_upload_file.png')
                    ->click('button[type="submit"]')
                    ->assertPathIs('/students/*')
                    ->assertSee('Created:');                               
        });
    }  
    */  
}