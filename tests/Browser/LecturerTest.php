<?php

namespace Tests\Browser;

use App\Models\User;
use App\Models\Cohort;
use App\Models\Student;
use Database\Factories\CohortFactory;
use Database\Factories\StudentFactory;
use Illuminate\Support\Facades\DB;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

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
                ->assertSee('Current Registered Users')
                ->screenshot('3-tempAnoneselected');
        });
    }

    public function testAdminCreateNewUser()
    {   
        // Admin creates a new user - Dusk Lecturer
        // Will be used to test changing of details in the lecturer's profile tab
        // and updating student info
        
        $this->browse(function ($browser) {
            $browser->visit('/users')                                    
                    ->assertPathIs('/users')
                    ->assertSee('Current Registered Users')
                    ->click('@new_user')
                    ->assertSee('Create New User')
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

    public function testAdminEditNewUser()
    {   
        $user = User::where('name', 'Dusk Lecturer')->first();

        $this->browse(function ($browser) use ($user) {
            $id = $user->id;
            $browser->visit('/users/'.$id.'/edit')
                    ->pause(1500)
                    ->screenshot('updateuserscreen')
                    ->assertSee('Update Dusk Lecturer')                    
                    ->select('Papers[]', 2)                 
                    ->screenshot('updateadminfields')
                    ->press('SUBMIT')
                    ->pause(1000)
                    ->assertPathIs('/users')
                    ->assertSee('Current Registered Users');                    
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
        // Now login as admin and set a paper (Studio 1) to a lecturer
        // and create a cohort for studio 1

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
        $cohortid = Cohort::where('paper_id', 2)
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
                ->assertPathIs('/')
                ->screenshot('10-student-added')
                ->assertSee('BIT Student Admin');
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
                ->click('@dropdown_Studio 1')  // Open hidden student table
                ->assertSee('Some Randomname')
                ->screenshot('lecturerseeslink');                
        });
    }

    public function testUpdateStudentFormvalidation()
    {     
        $student = Student::where('first_name', 'Some')->first();

        $this->browse(function ($browser) use ($student) {            
            $browser
                ->visit('/students/'.$student->id)
                ->assertPathIs('/students/*')
                ->screenshot('updateprofilesome')

                //first name validation 
                ->type('#edit_first_name', '1234') //form validation valid inputs
                ->press('UPDATE STUDENT')
                ->assertSee('Please use letters, spaces and hyphens only')
                ->screenshot('uselettersonly')
                ->type('#edit_first_name', 'a') //form validaiton min characters
                ->press('UPDATE STUDENT')
                ->assertSee('First name must have at least 3 characters') //form validaiton max characters 
                ->screenshot('min_firstname_characters')
                ->type('#edit_first_name', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa')
                ->press('UPDATE STUDENT')
                ->assertSee('First name exceeds 25 character limit')
                ->screenshot('25_character_limit')

                //last name validation 
                ->type('#edit_last_name','1234')
                ->press('UPDATE STUDENT')
                ->assertSee('Please use letters, spaces and hyphens only')
                ->type('#edit_last_name','a')
                ->assertSee('First name must have at least 3 characters')
                ->type('#edit_last_name', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa')
                ->press('UPDATE STUDENT')
                ->assertSee('First name exceeds 25 character limit');
        });
    }

    //Function creates studio 2 and assigns it to Lecturer A, then creates dummy students and assigns them to studio 1,
    //Then finally tests if the students can be moved to studio 2.
    public function testLecturerMoveStudent()
    {
        $this->browse(function ($browser) {

            // Assigning studio 2 to Lecturer Temp A 
            DB::table('user_papers')->insert([
                'user_id' => 2,
                'paper_id' => 3, 
            ]);

            // Creating Cohort (there now should be 2 cohorts)
            Cohort::factory()->create([
                'id' => 3,
                'paper_id' => 3, // Studio 2
                'year' => '2021-01-01',
                'semester' => 'Semester 1',
                'stream' => 'A',
            ]);

            // Creating Dummy Students to Move between Cohorts, all are placed into studio 1
            Student::factory()->create([
                'id' => 3,
                'first_name' => 'Sam',
                'last_name' => 'Smith',
                'username' => 'Smithy',
                'email' => 'smithy@gmail.com',
                'github' => 'smithgit',
                'cohort_id' => 2, 
                'is_active' => 1,
            ]);

            Student::factory()->create([
                'id' => 4,
                'first_name' => 'Mike',
                'last_name' => 'Myers',
                'username' => 'mmmike',
                'email' => 'mmike@gmail.com',
                'github' => 'mmikeygit',
                'cohort_id' => 2, 
                'is_active' => 1,
            ]);

            Student::factory()->create([
                'id' => 5,
                'first_name' => 'bobby',
                'last_name' => 'bob',
                'username' => 'bobbyb',
                'email' => 'bob@gmail.com',
                'github' => 'bobgit',
                'cohort_id' => 2, 
                'is_active' => 1,
            ]);

            $browser
                ->visit('/')
                ->assertSee('Studio 1')
                ->assertSee('Studio 2')
                ->click('@dropdown_Studio 1')
                ->assertSee('Sam Smith')
                ->assertSee('Mike Myers')
                ->assertSee('bobby bob')
                ->check('@student_checkboxes3')
                ->check('@student_checkboxes4')
                ->check('@student_checkboxes5')
                ->select('cohort', 3)
                ->screenshot('selectedStudentsToMove')
                ->click('@transfer')
                ->pause(2000)
                ->click('@dropdown_Studio 2')
                ->assertSee('Sam Smith')
                ->assertSee('Mike Myers')
                ->assertSee('bobby bob')
                ->screenshot('movestudents');
        });
    }

    //Test Selects multiple students and removes then.
    public function testLecturerRemoveMultipleStudentsFromCohot()
    {
        $this->browse(function ($browser) {
            $browser
                ->visit('/')
                ->assertPathIs('/')
                ->assertSee('Studio 2')
                ->click('@dropdown_Studio 2')
                ->pause(2000)
                ->assertSee('Sam Smith')
                ->assertSee('Mike Myers')
                ->assertSee('bobby bob')
                ->check('@student_checkboxes3')
                ->check('@student_checkboxes4')
                ->check('@student_checkboxes5')
                ->screenshot('selectedStudents')
                ->press('REMOVE SELECTED')
                //->click('@remove_students') //for some reason dusk cannot interact with the remove student button and its driving me insane 
                //->clickAtPoint($x = 1436, $y = 860) //x, y co-ords of remove student button  
                ->pause(2000)
                ->click('@dropdown_Studio 2')
                ->assertDontSee('Sam Smith')
                ->assertDontSee('Mike Myers')
                ->assertDontSee('bobby bob')
                ->screenshot('deletedstudents');
        });
    }

    //test to re-add the students back to studio 2
    public function testLecturerAddStudentsToCohort()
    {
        $this->browse(function ($browser) {
            $browser
                ->visit('/')
                ->click('@go_to_enable_students')
                ->assertSee('Sam Smith')
                ->assertSee('Mike Myers')
                ->assertSee('bobby bob')
                ->check('@student_checkboxes3')
                ->check('@student_checkboxes4')
                ->check('@student_checkboxes5')
                ->select('cohort', 3)
                ->click('@activate_students')
                //->assertSee('Successfully Added Student(s)')
                ->screenshot('students_confirm_msg')
                ->visit('/')
                ->assertPathIs('/')
                ->click('@dropdown_Studio 2')
                ->assertSee('Sam Smith')
                ->assertSee('Mike Myers')
                ->assertSee('bobby bob')
                ->screenshot('students_confirm');
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
        DB::table('user_papers')->insert([
            'user_id' => 4,
            'paper_id' => 3, 
        ]);

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
