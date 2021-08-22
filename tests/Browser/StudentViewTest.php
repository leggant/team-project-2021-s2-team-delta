<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentViewTest extends DuskTestCase
{
    // use DatabaseMigrations;

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
            
    public function testStudentUpload()
    {
        // an admin user is created and logged in
        // the test visits the add-student page and enters data into the fields
        // the Add/+ button is pressed to submit the data. Success submit is tested
        // by checking the path and looking for entered data on the page.

        $this->createadminuser();

        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                    ->visit('/add-student')
                    ->assertPathIs('/add-student')
                    ->type('#name','John Doe')
                    ->type('#email','John@gmail.com')
                    ->type('#github','JohnD')
                    ->press('+')
                    ->assertPathIs('/')
                    ->assertSee('John Doe')
                    ->assertSee('John@gmail.com')
                    ->assertSee('JohnD');
        });
    }
}
