<?php

namespace Tests\Browser;

use App\Models\User;
use App\Models\Cohort;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Illuminate\Support\Facades\DB;

class LecturerTest extends DuskTestCase
{
    public function testAdminUsersPage()
    {
        // Login as admin and set a lecturer to no papers assigned

        $user = User::where('is_admin', 1)->first();

        $this->browse(function ($browser) use ($user) {
            $browser
                ->loginAs($user)
                ->visit('/users')
                ->pause(2000)
                ->assertPathIs('/users')
                ->assertSee('Current Registered Users')
                ->assertSee('studio-a@op.ac.nz') // hard-coded 'temp A' lecturer email login
                ->visit('/users/2/edit')
                ->screenshot('1-editlecturer')
                ->assertSee('Update Temp A')
                ->select('Papers[]', 1) // Select option from papers dropdown for none selected then click the SUBMIT button
                ->screenshot('2-noneselected')
                ->press('SUBMIT')
                ->pause(1000)
                ->assertPathIs('/users')
                ->screenshot('3-tempAnoneselected');
        });
    }

    public function testAdminCreateNewUser()
    {   
        // Admin creates a new user - Dusk Lecturer
        // Will be used to test changing of details in the lecturer's profile tab
        
        $this->browse(function ($browser) {
            $browser->visit('/users')
                    ->pause(2000)
                    ->assertPathIs('/users')                   
                    ->assertSee('Current Registered Users')
                    ->press('CREATE NEW USER')
                    ->assertPathIs('/users/create*')
                    ->screenshot('usercreatescreen')
                    ->type('#Name', 'Dusk Lecturer')
                    ->type('#Email', 'fake@fakeemail.com')
                    ->type('#Password', 'SeriousPassword987')
                    //->check('#Admin')                    
                    ->screenshot('createdusklecturerinputs')
                    ->press('SUBMIT')
                    ->assertPathIs('/users')
                    ->assertTitle('Studio Management');                    
        });
    }

    public function testLecturerLogoutAdmin()
    {
        $this->browse(function ($browser) {
            $browser->press('Log Out')->assertPathIs('/login');
        });
    }

    public function testLecturerLogin()
    {
        $user = User::where('name', 'Temp A')->first(); // get first user that isn't flagged as an admin (i.e. A Lecturer)

        $this->browse(function ($browser) use ($user) {
            $browser
                ->loginAs($user)
                ->pause(2000)
                ->visit('/')
                ->assertPathIs('/')
                ->assertSee('Welcome Temp A');
        });
    }

    // Next two functions test that a lecturer with no papers cannot access evidence or notes
    // You do not have access to this page

    public function testLecturerUploads()
    {
        $this->browse(function ($browser) {
            $browser
                ->visit('/evidence')
                ->assertPathIs('/evidence')
                ->assertSee('You do not have access to this page');
        });
    }

    public function testLecturerNotes()
    {
        $this->browse(function ($browser) {
            $browser
                ->visit('/evidence')
                ->assertPathIs('/evidence')
                ->assertSee('You do not have access to this page');
        });
    }

    public function testNewAdminUsersPage()
    {
        // Now login as admin and set a paper (Studio 1) and cohort to a lecturer

        $user = User::where('is_admin', 1)->first();

        $this->browse(function ($browser) use ($user) {
            $browser
                ->loginAs($user)
                ->visit('/users')
                ->pause(2000)
                ->assertPathIs('/users')
                ->assertSee('Current Registered Users')
                ->assertSee('studio-a@op.ac.nz') // hard-coded 'temp A' lecturer email login
                ->visit('/users/2/edit')    // hard-coded for user 2 'temp A'
                ->screenshot('4-editlectureragain')
                ->assertSee('Update Temp A')
                ->select('Papers[]', 2) // Select option 2 from 'papers' dropdown for Studio 1 then click the SUBMIT button
                ->screenshot('5-Paperselected')
                ->press('SUBMIT')
                ->pause(1000)
                ->assertPathIs('/users')
                ->screenshot('6-tempApaperselected'); // screenshots to confirm correct options are being selected and stored
        });
    }

    public function testAdminCreateCohort()
    {
        $this->browse(function ($browser) {
            $browser
                ->visit('/cohorts')
                ->assertPathIs('/cohorts')
                ->assertTitle('Studio Management')
                //->assertSee('Assigned')
                ->select('#paper', 2)
                ->append('#year', '01012021')
                ->select('#semester', 'Semester 1')
                ->click('#streama')
                ->screenshot('7-cohortoptions')
                ->press('CREATE COHORT')
                ->assertPathIs('/cohorts')
                ->screenshot('8-cohortassigned')
                ->assertSee('Current Cohorts');
        });
    }

    public function testLogoutAdminAgain()
    {
        $this->browse(function ($browser) {
            $browser->press('Log Out')->assertPathIs('/login');
        });
    }

    // Login to the edited lecturer and expect a course to be available

    public function testLecturerLoginAgain()
    {
        $user = User::where('name', 'Temp A')->first(); // get first user that isn't flagged as an admin

        $this->browse(function ($browser) use ($user) {
            $browser
                ->loginAs($user)
                ->pause(2000)
                ->visit('/')
                ->assertPathIs('/')
                ->assertTitle('Studio Management');
        });
    }

    // Expect different results now that a paper is assigned and a cohort created by admin
    // The lecturer should now have access to these forms

    public function testLecturerRetestUploads()
    {
        $this->browse(function ($browser) {
            $browser
                ->visit('/evidence')
                ->assertPathIs('/evidence')
                ->assertSee('UPLOAD FILES');
        });
    }

    public function testLecturerRetestNotes()
    {
        $this->browse(function ($browser) {
            $browser
                ->visit('/evidence')
                ->assertPathIs('/evidence')
                ->assertSee('SAVE NOTE');
        });
    }

    // Lecturer can add a student with a course created by the admin

    public function testLecturerAddStudent()
    {
        $cohortid = DB::table('cohorts')
            ->where('paper_id', 2)
            ->where('semester', 'Semester 1')
            ->where('stream', 'A')
            ->pluck('id');        

        $this->browse(function ($browser) use ($cohortid) {
            $id = $cohortid[0];
            $browser
                ->visit('/')
                ->assertPathIs('/')
                ->type('#first_name', 'Some')
                ->type('#last_name', 'RandomName')
                ->type('#id', 'Userofname') // Enter a username not greater than 10 chars. long
                ->type('#github', 'gittyhubber')
                ->select('cohort_id', $id)
                ->screenshot('9-studentoptions')
                ->press('ADD NEW STUDENT')
                ->pause(1000)
                ->assertPathIs('/students/*')
                ->screenshot('10-fakestudentprofile')
                ->assertSee('Userofname@student.op.ac.nz');
        });
    }

    public function testLecturerSeesStudents()
    {
        $this->browse(function ($browser) {
            $browser
                ->visit('/')
                ->assertPathIs('/')
                ->assertTitle('Studio Management')
                ->assertSee('Studio 1')
                ->assertPresent('#studentTable')
                ->click('summary')
                ->assertSee('Some Randomname')
                ->screenshot('lecturerseeslink');                
        });
    }

    public function testLogoutLecturerTempA()
    {
        $this->browse(function ($browser) {
            $browser->press('Log Out')->assertPathIs('/login');
        });
    }

    public function testUpdateLecturerProfile()
    {
        $user = User::where('name', 'Dusk Lecturer')->first();

        $this->browse(function ($browser) use ($user) {
            $browser->loginAs($user)
                    ->visit('/')
                    ->assertPathIs('/')
                    ->assertTitle('Studio Management')
                    ->screenshot('dusklecturerlogin')
                    ->visit('/user/profile')
                    ->type('#name', 'Dusky')
                    ->type('#email', 'dusky@fakeemail.com')                    
                    ->click('#updateprofile')
                    ->pause(1000)
                    ->screenshot('profileupdates')
                    ->type('#current_password', 'SeriousPassword987')
                    ->type('#password', 'BetterPassword321')
                    ->type('#password_confirmation', 'BetterPassword321')
                    ->click('#updatepassword')
                    ->pause(1000)
                    ->screenshot('passwordupdated');
        });
    }

    public function testLogoutLecturerDusk()
    {
        $this->browse(function ($browser) {
            $browser->press('Log Out')->assertPathIs('/login');
        });
    }

    public function testLecturerUpdateLogin()
    {           
        $this->browse(function ($browser) {            
            $browser
                ->visit('/login')
                ->assertPathIs('/login')
                ->value('#email', 'dusky@fakeemail.com')
                ->type('@password', 'BetterPassword321')
                ->click('button[type="submit"]')
                ->visit('/')
                ->assertPathIs('/')
                ->assertSee('Welcome Dusky')
                ->assertTitle('Studio Management')
                ->screenshot('updatedlecturerlogin');
        });
    }

}
