<?php

namespace Database\Seeders;

use Database\Seeders\Resources;
use Illuminate\Database\Seeder;
use Database\Seeders\NewsSeeder;
use Database\Seeders\UserSeeder;
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
            UserSeeder::class,
            Resources::class
        ]);
    }
}