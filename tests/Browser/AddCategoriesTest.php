<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AddCategoriesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testAddCategories()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/categories/create')
                ->type('title', 'categoriesTest')
                ->type('description', 'categoriesTest')
                ->press('Создать')
                ->assertPathIs('/admin/categories');
        });
    }

    public function testErrorAddCategories()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/categories/create')
                ->type('title', 'ca')
                ->type('description', '')
                ->press('Создать')
                ->assertSee('заголовок должен быть длинее')
                ->type('title', 'categoriesTestError')
                ->press('Создать')
                ->assertPathIs('/admin/categories');
        });
    }
}