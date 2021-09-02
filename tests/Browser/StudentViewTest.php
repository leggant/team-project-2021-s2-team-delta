<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StudentViewTest extends DuskTestCase
{
    use RefreshDatabase;

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
            
    public function testMakeStudent()
    {
        // an admin user is created and logged in
        // the test visits the add-student page and enters data into the fields
        // the Add/+ button is pressed to submit the data. Success submit is tested
        // by checking the path and looking for entered data on the page.

        $user = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 'password',
            'is_admin' => 1,
        ]);

        $this->browse(function ($browser) use($user) {
            $browser->loginAs($user)
                    ->visit('/students')
                    ->assertPathIs('/students')
                    ->type('#first_name','John')
                    ->type('#last_name', 'Doe')
                    ->type('#id', '666666666')
                    ->type('#email','John@gmail.com')
                    ->type('#github','JohnD')
                    ->press('ADD NEW STUDENT')
                    ->assertTitle('Studio Management')
                    ->assertPathIs('/students')
                    ->assertSee('Doe')
                    ->assertSee('666666666')
                    ->assertSee('John@gmail.com')
                    ->assertSee('JohnD');
        });
    }

    public function testDuplicateEmail()
    {
        /* 
        Test for bug with non-unique email address e.g use the same email address again for a new record
        This test is expected to fail if checks aren't done on the email address field
         */

        $user = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 'password',
            'is_admin' => 1,
        ]);

        $this->browse(function ($browser) use($user) {
            $browser->loginAs($user)
                    ->visit('/students')
                    ->assertPathIs('/students')
                    ->type('#first_name','John')
                    ->type('#last_name', 'Doe')
                    ->type('#id', '666666666')
                    ->type('#email','John@gmail.com')
                    ->type('#github','JohnD')
                    ->press('ADD NEW STUDENT')
                    ->assertTitle('Studio Management');                    
        });
    }
}
