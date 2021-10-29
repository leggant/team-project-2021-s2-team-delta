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
}