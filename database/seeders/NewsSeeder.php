<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert($this->getData());
    }

    private function getData(): array
    {
        $data = [];
        $faker = Factory::create();

        for ($i = 0; $i <= 10; $i++) {
            $title = $faker->jobTitle();
            $data[] = [
                'category_id' => 1,
                'title' => $title,
                'slug' => Str::slug($title),
                'author' => $faker->userName(),
                'image' => $faker->imageUrl(),
                'description' => $faker->text(100)
            ];
        }

        return $data;
    }
}
