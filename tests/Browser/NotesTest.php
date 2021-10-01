<?php

namespace Tests\Browser;

use App\Models\User;
use App\Models\Student;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesTest extends DuskTestCase
{
    public function testNotesMakeStudent()
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

    public function testFindNotesPage()
    {       
        $user = User::where('email', 'admin@admin.com')->first();

        $this->browse(function ($browser) use($user) 
        {
            $browser->loginAs($user)
                    ->visit('/notes')
                    ->pause(2000)
                    ->assertPathIs('/notes')                   
                    ->assertSee('SAVE NOTE');                    
        });
    }

    public function testNoteEmpty()
    {       
        // $user = User::where('email', 'admin@admin.com')->first();

        $this->browse(function ($browser) 
        {
            $browser//->loginAs($user)
                    ->visit('/notes')
                    ->pause(2000)
                    ->assertPathIs('/notes')
                    ->press('SAVE NOTE')
                    ->assertPathIs('/notes');              
        });
    }

    public function testNoteNoStudent()
    {       
        // $user = User::where('email', 'admin@admin.com')->first();

        $this->browse(function ($browser) 
        {
            $browser//->loginAs($user)
                    ->visit('/notes')
                    ->pause(2000)
                    ->assertPathIs('/notes')
                    ->type('notes', 'a note for a student is typed into the notes textarea but a student name has not been selected')
                    ->press('SAVE NOTE')
                    ->assertPathIs('/students/*');              
        });
    }

}
