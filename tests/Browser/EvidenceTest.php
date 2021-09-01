<?php

namespace Tests\Browser;

use App\Models\User;
use App\Models\Student;
use database\factories\UserFactory;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Illuminate\Support\Facades\Hash;

class EvidenceTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */


    public function createadminuser()
    {
        $user = User::where('email', '=', 'admin@admin.com')->first();
        if ($user === null) {
            $this->user = User::factory()->create([
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('password'),
                'is_admin' => 1,
            ]);
        }
    }    
    
    /* 
    Method to create a new student need to test evidence uploads
    Used to add the student directly to the database rather than
    via the students page
    */

    public function createstudent()
    {
        //$student = Student::where('email', '=', 'admin@admin.com')->first();
        //if ($user === null) {
            $this->student = Student::create([                
                'first_name' => 'Jesus',
                'last_name' => 'Christ',
                'username' => 'HolyGhost',
                'email' => 'jesus@hmail.com',
                'github' => 'imagithub'
            ]);
        //}
    }    

    public function testEvidenceExists()
    {
        $this->createadminuser();

        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
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

    public function testCreateEvidence()
    {
        $this->createstudent();

        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                    ->visit('/evidence')
                    ->type('@studentname', 'Jesus Christ')
                    // ->select('student', '1') Choose the first name in the dropdown
                    ->type('#title', 'Some Evidence')
                    ->attach('@image', storage_path('app/public/testing/test_upload.png'))
                    ->click('button[type="submit"]')
                    ->assertTitle('Studio Management');                                
        });
    }
}
