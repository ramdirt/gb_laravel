<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AddFeedbackTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testAddFeedback()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/feedback')
                ->type('name', 'aleksey')
                ->type('feedback', 'text')
                ->press('Отправить')
                ->assertPathIs('/');
        });
    }

    public function testErrorAddFeedback()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/feedback')
                ->type('name', 'aleksey')
                ->type('feedback', '')
                ->press('Отправить')
                ->assertSee('Поле отзыв нужно заполнить')
                ->type('name', 'aleksey')
                ->type('feedback', 'testErrorFeedback')
                ->press('Отправить')
                ->assertPathIs('/');
        });
    }
}
