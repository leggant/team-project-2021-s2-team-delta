<?php

namespace Tests\Browser;

use App\Models\User;
use App\Models\Student;
use Database\Factories\UserFactory;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StudentsTest extends DuskTestCase
{
    
    use RefreshDatabase;
    
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
    public function createstudent()
    {        
        $this->user = Student::create([
            'first_name' => 'Jesus',
            'last_name' => 'Christ',
            'username' => 'usemyname',
            'email' => 'jdog@hmail.com',
            'github' => 'jezzy123',
        ]);
        
    }
    */
    
    /* 
    Currently one placeholder test while waiting
    for CRUD features to be added. 
    Tests for create student and create with duplicate email address
    can be found in file StudentViewTest.php
    Will test delete, update, view/read when those features are available
    */

    public function testCreateStudent()
    {
        $user = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 'password',
            'is_admin' => 1,
        ]);

        $this->browse(function ($browser) use($user) {
            $browser->loginAs($user)
                    ->visit('/students')
                    ->assertPathIs('/students');                    
        });
    }

    /*
    public function testReadStudent()
    {
        $this->createadminuser();

        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                    ->visit('/students')
                    ->assertPathIs('/students');                    
        });
    }

    public function testUpdateStudent()
    {
        $this->createadminuser();

        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                    ->visit('/students')
                    ->assertPathIs('/students');                    
        });
    }

    public function testDeleteStudent()
    {
        $this->createadminuser();

        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                    ->visit('/students')
                    ->assertPathIs('/students');                    
        });
    }
    */
}
