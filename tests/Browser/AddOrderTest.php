<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AddOrderTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testAddOrder()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/order')
                ->type('name', 'TEST')
                ->type('phone', '88005553535')
                ->type('email', 'mail@mail.ru')
                ->type('order', 'textOrderTest')
                ->press('Отправить')
                ->assertPathIs('/');
        });
    }

    public function testErrorAddOrder()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/order')
                ->type('name', 'TEST')
                ->type('phone', '88005553535')
                ->type('order', 'textOrderTest')
                ->press('Отправить')
                ->assertSee('Поле эл. почта пустое')
                ->type('email', 'test@test.ru')
                ->press('Отправить')
                ->assertPathIs('/');
        });
    }
}