<?php

namespace Tests\Browser;

use App\Models\User;
use database\factories\UserFactory;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class StudentViewTest extends DuskTestCase
{
    public function createUser()
    {
        $user = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 'password',
            'is_admin' => 1,
        ]);
    }

    public function testStudentUpload()
    {
        // an admin user is created and logged in
        // the test visits the add-student page and enters data into the fields
        // the Add/+ button is pressed to submit the data. Success submit is tested
        // by checking the path and looking for entered data on the page.

        $user = User::where('name', 'admin')->first();       
        $this->browse(function ($browser) use ($user) {
            $browser->loginAs($user)->visit('/students')
                    ->assertPathIs('/students')
                    ->type('#name','John Doe')
                    ->type('#email','John@gmail.com')
                    ->type('#github','JohnD');
            $browser->screenshot('Student Form Filled');
            $browser->press('SAVE')
                    ->assertPathIs('/students')
                    ->assertSee('John Doe')
                    ->assertSee('John@gmail.com')
                    ->assertSee('JohnD');
            $browser->screenshot('New Student');
        });
    }
}
