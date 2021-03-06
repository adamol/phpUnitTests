<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        // $this->visit('/')
             // ->see('Laravel 5.2');

        $this->visit('/')
             ->click('Click Me')
             ->see("You've been clicked, punk")
             ->seePageIs('/feedback');
        
    }
}
