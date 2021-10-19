<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;


class PermissionTest extends DuskTestCase
{

    public function testAccessNotesView()
    {
        $user = User::where('email', 'admin@admin.com')->first();

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
        $user = User::where('email', 'admin@admin.com')->first();

        $this->browse(function ($browser) use($user) 
        {
            $browser->loginAs($user)
                    ->visit('/evidence')
                    ->assertPathIs('/evidence')
                    ->assertSee('UPLOAD FILES');                   
        });
    }

}
