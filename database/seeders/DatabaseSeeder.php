<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\NewsSeeder;
use Database\Seeders\CategoriesSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategoriesSeeder::class,
            NewsSeeder::class,
            SourcesSeeder::class,
        ]);
    }
}