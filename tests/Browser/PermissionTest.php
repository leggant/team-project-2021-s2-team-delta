<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

class PermissionTest extends DuskTestCase
{
    // Test whether an admin user can access the notes and evidence features
    // again this test does not first go to the login route, enter login data click login, then move to /notes page
    // public function testAccessNotesView()
    // {
    //     $user = User::where('is_admin', 1)->first();
    //     $this->browse(function ($browser) use ($user) {
    //         $browser
    //             ->loginAs($user)
    //             ->visit('/notes')
    //             ->assertPathIs('/notes')
    //             ->assertSee('SAVE NOTE');
    //     });
    // }
// test fails due to not logging in, going to the login route, entering login data, pressing login. then pressing the evidence link, pausing, then asserting the path
    // public function testAccessEvidenceView()
    // {
    //     $this->browse(function ($browser) {
    //         $browser
    //             ->visit('/evidence')
    //             ->assertPathIs('/evidence')
    //             ->assertSee('UPLOAD FILES');
    //     });
    // }
}
