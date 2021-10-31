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

// Note: make sure the AWS .env variables are configured in your .env 

class EvidenceNotesTest extends DuskTestCase
{
    /*
    The function below creates a cohort (studio 1, 2021-01-01, Semester 2, Stream J),
    a Student for that cohort (Jim Smith, UseThisName, johnsmith@gmail.com, johnsgit)
    and assigns Studio 1 to the admin user (studioadmin@op.ac.nz)
    You can now use the student in evidence tests
    */
    
    public function testEvidenceCreateUsableStudent()
    {
        DB::table('user_papers')->insert(
            [
                'id' => 4,
                'user_id' => 1, // The id from users table (1 = Admin, 2= Temp A, 3=Temp B)
                'paper_id' => 2,    // With paper_id matching the one in cohort above
            ]
        );

        $cohort = Cohort::factory()->create([
            'id' => 2,
            'paper_id' => 2,    // Studio 1
            'year' => '2021-01-01',
            'semester' => 'Semester 2',
            'stream' => 'J'
        ]);        

        $newstudent = Student::factory()->create([
            'id' => 2,
            'first_name' => 'Jim',
            'last_name' => 'Smith',
            'username' => 'UseThisName',
            'email' => 'johnsmith@gmail.com',
            'github' => 'johnsgit',
            'cohort_id' => 2,   // The cohort created above
            'is_active' => 1
        ]);

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
    
    public function testFindNotesPage()
    {  
        $this->browse(function ($browser) 
        {
            $browser->visit('/notes')
                    ->pause(2000)
                    ->assertPathIs('/notes')                   
                    ->assertSee('SAVE NOTE');                    
        });
    }

    //this test uploads a file to a student profile as an admin, then checks if the file has been uploaded.
    public function testAdminEvidenceSubmit()
    {
        $user = User::where('is_admin', 1)->first();

        $this->browse(function ($browser) use($user)
        {
            $browser->loginAs($user)
                    ->visit('/evidence')
                    ->assertPathIs('/evidence')
                    ->assertSee('Jim Smith')
                    ->assertSee('UPLOAD FILES')
                    ->type('@title', 'Evidence Upload Test')
                    ->attach('@image', storage_path('\test_upload_file.png'))  
                    ->click('button[type="submit"]')
                    ->pause(2000)
                    ->assertPathBeginsWith('/students')
                    ->assertSee('EVIDENCE UPLOAD TEST')
                    ->screenshot('studentprofile');
        });
    }

    //evidence deletion test, visits the home screen, clicks on the student profile then deletes the evidence. 
    public function testEvidenceDeletion()
    {
        $user = User::where('is_admin', 1)->first();

        $this->browse(function ($browser) use($user)
        {
            $browser->loginAs($user)
                    ->visit('/')
                    ->assertPathIs('/')
                    ->assertSee('Jim Smith')
                    ->clickLink('Jim Smith')
                    ->assertSee('EVIDENCE UPLOAD TEST')
                    ->press('DELETE')
                    ->assertSee('No files found')
                    ->screenshot('deletion');
        });
    }

    /*

    Commented out temporarily as the notes upload isn't working in this branch but is in development, will get the notes test working 
    after the merge 
    public function testAdminNoteSubmit()
    {
        $user = User::where('is_admin', 1)->first();

        $this->browse(function ($browser) use($user)
        {
            $browser->loginAs($user)
                    ->visit('/notes')
                    ->pause(2000)
                    ->assertPathIs('/notes')
                    ->assertSee('SAVE NOTE')
                    ->assertSee('Jim Smith')
                    ->type('@filelink', 'www.google.com')
                    ->type('@noteinput', 'testing note submissions!')
                    ->click('button[type="submit"]')
                    ->pause(2000)

        });
    }*/
}