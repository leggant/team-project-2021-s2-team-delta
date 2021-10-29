<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;


class PermissionTest extends DuskTestCase
{
    // Test whether an admin user can access the notes and evidence features

    public function testAccessNotesView()
    {
        $user = User::where('is_admin', 1)->first();

        $this->browse(function ($browser) use($user) 
        {
            $browser->loginAs($user)
                    ->visit('/notes')
                    ->assertPathIs('/notes')
                    ->assertSee('SAVE NOTE');                   
        });
    }

    public function testAccessEvidenceView()
    {
        $this->browse(function ($browser) 
        {
            $browser->visit('/evidence')
                    ->assertPathIs('/evidence')
                    ->assertSee('UPLOAD FILES');                   
        });
    }
}
