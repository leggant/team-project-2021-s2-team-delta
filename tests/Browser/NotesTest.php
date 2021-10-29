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
}
