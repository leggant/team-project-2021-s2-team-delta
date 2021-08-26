<?php

namespace Tests\Browser;

use App\Models\User;
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
    
    public function testCreateEvidence()
    {
        $this->createadminuser();

        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                    ->visit('/evidence')
                    ->assertPathIs('/evidence')                   
                    ;                    
        });
    }
}
