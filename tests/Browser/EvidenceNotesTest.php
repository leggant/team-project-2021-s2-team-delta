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
        DB::table('user_papers')->insert([
            'user_id' => 1, // The id from users table (1 = Admin, 2= Temp A, 3=Temp B)
            'paper_id' => 2, // With paper_id matching the one in cohort above
        ]);

        
        DB::table('users')
            ->where('id', 1)
            ->update(['paper_id' => 2 
        ]);


        $cohort = Cohort::factory()->create([
            'paper_id' => 2, // Studio 1
            'year' => '2021-01-01',
            'semester' => 'Semester 2',
            'stream' => 'J',
        ]);

        $newstudent = Student::factory()->create([
            'first_name' => 'Jim',
            'last_name' => 'Smith',
            'username' => 'Jsmithy',
            'email' => 'johnsmith@gmail.com',
            'github' => 'johnsgit',
            'cohort_id' => 1, // The cohort created above
            'is_active' => 1,
        ]);

        $this->assertTrue(true);
    }

    public function testEvidenceNotesAdminAccess()
    {
        $user = User::where('is_admin', 1)->first();

        $this->browse(function ($browser) use ($user) {
            $browser
                ->loginAs($user)
                ->visit('/evidence')
                ->assertPathIs('/evidence')
                ->assertSee('UPLOAD FILES')
                ->assertSee('SAVE NOTE')
                ->screenshot('evidence/notes upload form');
        });
    }

    //this test uploads a file to a student profile as an admin, then checks if the file has been uploaded.
    public function testAdminEvidenceSubmit()
    {
        $user = User::where('is_admin', 1)->first();

        $this->browse(function ($browser) use ($user) {
            $browser
                ->loginAs($user)
                ->visit('/evidence')
                ->assertPathIs('/evidence')
                ->assertSee('Jim Smith')
                ->assertSee('UPLOAD FILES')
                ->type('#title', 'Test')
                ->attach('@image', storage_path('test_upload_file.png'))
                ->click('@evidence_submit')
                ->pause(2000)
                ->assertPathBeginsWith('/students')
                ->assertSee('Test')
                ->screenshot('evidence_view');
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
                    ->click('@dropdown')
                    ->click('@student_records')
                    ->assertPathBeginsWith('/students')
                    ->assertSee('Test')
                    ->press('@evidence_delete')
                    ->pause(2000)
                    ->assertSee('No files found')
                    ->screenshot('evidence_deletion');
        });
    }

    //test uploads a note then checks the student profile for the upload. 
    public function testAdminNoteSubmit()
    {
        $user = User::where('is_admin', 1)->first();

        $this->browse(function ($browser) use($user)
        {
            $browser->loginAs($user)
                    ->visit('/evidence')
                    ->pause(2000)
                    ->assertPathIs('/evidence')
                    ->assertSee('SAVE NOTE')
                    ->assertSee('Jim Smith')
                    ->type('@filelink', 'https://www.google.com')
                    ->type('@noteinput', 'testing note submissions!')
                    ->click('@notes_submit')
                    ->pause(2000)
                    ->screenshot('note_view');
        });
    }

    //test goes to the student profile, than deletes a note upload. 
    public function testAdminNotesDelete()
    {
        $user = User::where('is_admin', 1)->first();

        $this->browse(function ($browser) use($user)
        {
            $browser->loginAs($user)
                    ->visit('/')
                    ->assertPathIs('/')
                    ->click('@dropdown')
                    ->click('@student_records')
                    ->assertPathBeginsWith('/students')
                    ->assertSee('Testing Note Submissions!')
                    ->press('@notes_delete')
                    ->pause(2000)
                    ->assertSee('No notes found')
                    ->screenshot('note_deletion');
        });
    }
}
