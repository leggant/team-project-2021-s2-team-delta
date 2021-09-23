<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AdminpanelTest extends DuskTestCase
{
    public function testFindAdminPage()
    {       
        $user = User::where('email', 'admin@admin.com')->first();

        $this->browse(function ($browser) use($user) {
            $browser->loginAs($user)
                    ->visit('/admin-panel')
                    ->pause(2000)
                    ->assertPathIs('/admin-panel')                   
                    ->assertSee('MANAGE USERS');                    
        });
    }
}
