<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AdminpanelTest extends DuskTestCase
{
    /*
    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('migrate:fresh --force');
        $this->artisan('db:seed');
    }
    */

    public function testFindAdminPage()
    {
        $user = User::where('is_admin', 1)->first();

        $this->browse(function ($browser) use ($user) {
            $browser
                ->loginAs($user)
                ->visit('/users')
                ->pause(2000)
                ->assertPathIs('/users')
                ->assertSee('Current Registered Users');
        });
    }

    public function testCreateNewUser()
    {
        $user = User::where('is_admin', 1)->first();

        $this->browse(function ($browser) use ($user) {
            $browser
                ->loginAs($user)
                ->visit('/users')
                ->pause(2000)
                ->assertPathIs('/users')
                ->assertSee('Current Registered Users')
                ->click('@new_user')
                ->screenshot('clicknewuser')
                ->assertSee('Create New User')
                ->type('#Name', 'Test User')
                ->type('#Email', 'testuser@test.com')
                ->type('#Password', 'password')
                ->check('is_admin')
                ->screenshot('createuseroptions')
                ->press('SUBMIT')
                ->assertPathIs('/users')
                ->screenshot('checkusercreated')
                ->assertSee('testuser@test.com');
        });
    }

    public function testEditUsers()
    {
        $user = User::where('is_admin', 1)->first();

        $this->browse(function ($browser) use ($user) {
            $browser
                ->loginAs($user)
                ->visit('/users')
                ->pause(2000)
                ->assertPathIs('/users')
                ->assertSee('Current Registered Users')
                ->screenshot('testeditusers')
                ->visit('/users/2/edit')
                ->assertSee('Update Temp A')
                ->check('Admin')
                ->select('Papers[]', ['2', '3'])
                ->screenshot('useredited')
                ->press('SUBMIT')
                ->assertPathIs('/users')
                ->assertSee('studio-a@op.ac.nz')
                ->assertSee('Studio 1')
                ->assertSee('Studio 2');
        });
    }

    public function testCreateBackButton()
    {
        $user = User::where('is_admin', 1)->first();

        $this->browse(function ($browser) use ($user) {
            $browser
                ->loginAs($user)
                ->visit('/users')
                ->pause(2000)
                ->assertPathIs('/users')
                ->assertSee('Current Registered Users')
                ->click('@new_user')
                ->assertSee('Create New User')
                ->click('@back')
                ->assertPathIs('/users')
                ->assertSee('Current Registered Users');
        });
    }

    public function testEditBackButton()
    {
        $user = User::where('is_admin', 1)->first();

        $this->browse(function ($browser) use ($user) {
            $browser
                ->loginAs($user)
                ->visit('/users')
                ->pause(2000)
                ->assertPathIs('/users')
                ->assertSee('Current Registered Users')
                ->visit('/users/2/edit')
                ->assertSee('Update Temp A')
                ->click('@back')
                ->assertPathIs('/users')
                ->assertSee('Current Registered Users');
        });
    }
}
