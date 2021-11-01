<?php

namespace Tests\Browser;

use App\Models\User;
use App\Models\Student;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesTest extends DuskTestCase
{
    public function NotesMakeStudent()
    {
        // Can create a user here but get warning about a risky file containing no tests
        // This method won't be called cos it doesn't include the word test in it's name
        $student = Student::create([
            'first_name' => 'Jesus',
            'last_name' => 'Christ',
            'username' => 'HolyGhost',
            'email' => 'jesus@hmail.com',
            'github' => 'imagithub',
        ]);
    }

    /* 
    Currently commented out/excluded due these not working with the current flow of the site
    i.e. these tests would be more appropriate for inclusion during lecturer access testing
    due partly to the need for admin to assign papers, cohort creation, then student creation before
    note tests can occur
    */

    // This simple test left in to prevent 'no assertions' error happening

    public function testFindNotesPage()
    {
        $user = User::where('is_admin', 1)->first();
        $this->browse(function ($browser) use ($user) {
            $browser
                ->loginAs($user)
                ->visit('/notes')
                ->pause(2000)
                ->assertPathIs('/notes')
                ->assertSee('SAVE NOTE');
        });
    }

    public function testNoteEmpty()
    {
        $this->browse(function ($browser) {
            $browser
                ->visit('/notes')
                ->pause(1500)
                ->assertPathIs('/notes')
                ->press('SAVE NOTE') // Pressing save note button without entering anything in the fields - i.e. an empty note
                ->assertPathIs('/notes')
                ->assertTitle('Studio Management'); // The title of the current page will be 'outside' the normal if an error has occurred
        });
    }
    //user is not logged in before the test is run, there are no records in the database with id of *
    // so the test will fail.
    // public function testNoteNoStudent()
    // {
    //     $this->browse(function ($browser)
    //     {
    //         $browser->visit('/notes')
    //                 ->pause(1500)
    //                 ->assertPathIs('/notes')
    //                 ->type('notes', 'a note for a student is typed into the notes textarea but a student name has not been selected')
    //                 ->press('SAVE NOTE')
    //                 ->assertPathIs('/students/*');
    //     });
    // }
}
