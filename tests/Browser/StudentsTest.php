<?php

namespace Tests\Browser;

use App\Models\User;
use App\Models\Student;
use Database\Factories\UserFactory;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class StudentsTest extends DuskTestCase
{
    /*
    Will test delete, update, view/read when those features are available
    */

    public function testStudentPlaceholder()
    {
        // Placeholder test used to prevent errors from empty test file

        $user = User::where('is_admin', 1)->first();

        $this->browse(function ($browser) use ($user) {
            $browser
                ->loginAs($user)
                ->visit('/')
                ->assertTitle('Studio Management');
        });
    }
}
