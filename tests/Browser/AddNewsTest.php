<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AddNewsTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testAddNews()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/news/create')
                ->select('category_id', 5)
                ->type('title', 'newsTest')
                ->select('status', 'DRAFT')
                ->type('author', 'Aleksey Reznikov')
                ->type('description', 'newsTest')
                ->press('Сохранить')
                ->assertPathIs('/admin/news');
        });
    }

    public function testErrorAddNews()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/news/create')
                ->select('category_id', 5)
                ->type('title', '')
                ->select('status', 'DRAFT')
                ->type('author', '')
                ->type('description', 'newsTest')
                ->press('Сохранить')
                ->type('title', 'newsTest')
                ->type('description', 'newsTest')
                ->type('author', 'Aleksey')
                ->press('Сохранить')
                ->assertPathIs('/admin/news');
        });
    }
}