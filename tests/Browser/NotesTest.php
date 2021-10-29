<?php

namespace Tests\Browser;

use App\Models\User;
use App\Models\Student;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesTest extends DuskTestCase
{
    /*
    public function NotesMakeStudent()
    {
        
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
    Similar to the function in EvidenceTest
    Used to create a cohort, student, and assign a paper to admin
    to be used for notes tests    
    */

    public function testNotesCreateUsableStudent()
    {           
        $cohort = Cohort::factory()->create([
            'id' => 2,
            'paper_id' => 3,    // Studio 2
            'year' => '2021-01-01',
            'semester' => 'Semester 1',
            'stream' => 'A'
        ]);
        
        $newstudent = Student::factory()->create([
            'id' => 2,
            'first_name' => 'Dave',
            'last_name' => 'Jones',
            'username' => 'nameymcname',
            'email' => 'djones@yahoo.com',
            'github' => 'jonesydgit',
            'cohort_id' => 2,   // The cohort created above
            'is_active' => 1
        ]);

        DB::table('user_papers')->insert(
            [
                'id' => 2,
                'user_id' => 2, // The student/user created above
                'paper_id' => 3,    // With paper_id matching the one in cohort above
            ]
        );

        $this->assertTrue(true);        
    }

    public function testFindNotesPage()
    {       
        $user = User::where('is_admin', 1)->first();

        $this->browse(function ($browser) use($user) 
        {
            $browser->loginAs($user)
                    ->visit('/notes')
                    ->pause(2000)
                    ->assertPathIs('/notes')                   
                    ->assertSee('SAVE NOTE');                    
        });
    }

    /*
    public function testNoteEmpty()
    {       
        $this->browse(function ($browser) 
        {
            $browser->visit('/notes')
                    ->pause(1500)
                    ->assertPathIs('/notes')
                    ->press('SAVE NOTE')    // Pressing save note button without entering anything in the fields - i.e. an empty note
                    ->assertPathIs('/notes')
                    ->assertTitle('Studio Management')  // The title of the current page will be 'outside' the normal if an error has occurred
                    ;              
        });
    }

    public function testNoteNoStudent()
    {       
        $this->browse(function ($browser) 
        {
            $browser->visit('/notes')
                    ->pause(1500)
                    ->assertPathIs('/notes')
                    ->type('notes', 'a note for a student is typed into the notes textarea but a student name has not been selected')
                    ->press('SAVE NOTE')
                    ->assertPathIs('/students/*');              
        });
    }
    */

}
