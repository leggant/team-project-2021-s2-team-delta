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

    public function testCreateEvidence()
    {
        $this->createstudent();

        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                    ->visit('/evidence')
                    ->type('@studentname', 'Jesus Christ')
                    ->type('#title', 'Some Evidence')
                    //->press('@image')
                    //->choose dummy file ???
                    ->click('button[type="submit"]')
                    ->assertTitle('Studio Management');                                
        });
    }
}
