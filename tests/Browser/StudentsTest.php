<?php

namespace Tests\Browser;

use App\Models\User;
use App\Models\Student;
use Database\Factories\UserFactory;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class StudentsTest extends DuskTestCase
{
    // NOTE : Any student tests will need to added to lecturer or admin access test files
    // This is because roles and assignments need to be done before student features are usable

    /* 
    Currently one placeholder test while waiting
    for CRUD features to be added. 
    Tests for create student and create with duplicate email address
    can be found in file StudentViewTest.php
    Will test delete, update, view/read when those features are available
    */

    // public function testStudentPlaceholder()
    // {
    //     // Placeholder test used to prevent errors from empty test file

    //     $user = User::where('is_admin', 1)->first();

    //     $this->browse(function ($browser) use ($user) {
    //         $browser
    //             ->loginAs($user)
    //             ->visit('/')
    //             ->assertTitle('Studio Management');
    //     });
    // }    
}
