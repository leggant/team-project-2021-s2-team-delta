<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

class PermissionTest extends DuskTestCase
{
    // Test whether an admin user can access the notes and evidence features
    // again this test does not first go to the login route, enter login data click login, then move to /notes page

    public function testAccessNotesView()
    {
        $user = User::where('is_admin', 1)->first();

        $this->browse(function ($browser) use ($user) {
            $browser
                ->loginAs($user)
                ->visit('/evidence')
                ->assertPathIs('/evidence')
                ->assertSee('SAVE NOTE');
        });
    }

    public function testAccessEvidenceView()
    {
        $this->browse(function ($browser) {
            $browser
                ->visit('/evidence')
                ->assertPathIs('/evidence')
                ->assertSee('UPLOAD FILES');
        });
    }
}
