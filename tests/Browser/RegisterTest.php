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
                    ->clickLink('register')
                    ->type('name','User')
                    ->type('email','User1@gmai.com')
                    ->type('password','User12345')
                    ->type('password_confirmation','User12345')
                    ->press('Register');
                    
        });
    }
}
