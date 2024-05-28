<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Register')
                    ->assertPathIs('/register')
                    ->assertSee('Create account')
                    ->assertSee('Name')
                    ->type('name','User')
                    ->assertSee('Email')
                    ->type('email','User1@gmai.com')
                    ->assertSee('Password')
                    ->type('password','User12345')
                    ->assertSee('Confirm Password')
                    ->type('password_confirmation','User12345')
                    ->assertSee('Register')
                    ->press('Register');
        });
    }
}
