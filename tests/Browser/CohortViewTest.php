<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Laravel\Dusk\Chrome;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class CohortViewTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function createUser()
    {
        Artisan::call('migrate:fresh');
        $user = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 'password',
            'is_admin' => 1,
        ]);
    }
    public function testFindCohortPage()
    {
        $user = User::where('name', 'admin')->first();
        $this->browse(function ($browser) use ($user) {
            $browser
                ->visit('/login')
                ->assertPathIs('/login')
                ->type('email', $user->email)
                ->type('password', 'password');
            $browser->screenshot('form-filled')
                ->press('LOG IN')
                ->loginAs($user)
                ->pause(3000)
                ->visit('/')
                ->assertPathIs('/');
            $browser->screenshot('home');
                // ->assertSee('Cohort');
        });
    }

    public function testAllFieldsEmpty()
    {
        $user = User::where('id', 1)->first();
        $this->browse(function ($browser) use ($user) {
            $browser
                ->visit('/login')
                ->loginAs($user)
                ->visit('/cohorts')
                ->assertPathIs('/cohorts')
                ->assertTitle('Studio Management')
                ->assertSee('Studio');
        });
    }

    /* Enter a string of 192 chars into the student field */

    public function testOverloadStudents()
    {
        $user = User::where('id', 1)->first();
        $this->browse(function ($browser) use ($user) {
            $browser
                ->visit('/login')
                ->loginAs($user)
                ->visit('/cohorts')
                ->assertPathIs('/cohorts')
                // ->type('paper', 'Studio 4')
                // ->type('#year', '2021')
                // ->type('#semester', '1')
                // ->type('#stream', 'A')
                // ->type('#students', 'ugRZiYXP2gEmkf66NINrE6hYMfs6MzvC607MlApY39Uvat2s3qsSgVdMDJ2hNU5AdYyYAqOfnWzXaXZgxI8MRrX09mg28vCUTxWcxGMsjCTXECwAYCXnRfNN5Chz17UKkEwZqdqYrwjUrdcnrPtfAOy5KkT29I8NNrTl9P7MJujusTnNj57XhPpRXqOoAQj5
                // ')
                ->assertTitle('Studio Management')
                ->click('@save');
        });
    }

    public function testViewCohort()
    {
        $user = User::where('id', 1)->first();
        $this->browse(function ($browser) use ($user) {
            $browser
                ->loginAs($user)
                ->visit('/cohorts')
                ->assertPathIs('/cohorts')
                // ->type('#year', '2025')
                // ->type('#semester', '1')
                // ->type('#stream', 'A')
                ->assertTitle('Studio Management')
                ->click('@save');
        });
    }
}
