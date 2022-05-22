<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getNews(int $id = null)
    {
        $news = [];
        $faker = Factory::create();

        for ($i = 1; $i < 10; $i++) {
            $news[] = [
                'id' => $i,
                'category_id' => rand(0, 4),
                'title' => $faker->jobTitle(),
                'author' => $faker->name(),
                'image' => $faker->imageUrl(),
                'description' => $faker->text(150),
                'created_at' => now('Europe/Moscow')
            ];
        }

        if ($id) {
            return [
                'id' => $id,
                'category_id' => rand(0, 4),
                'title' => $faker->jobTitle(),
                'author' => $faker->name(),
                'image' => $faker->imageUrl(),
                'description' => $faker->text(150),
                'created_at' => now('Europe/Moscow')
            ];
        }

        return $news;
    }

    public function getCategories(int $id = null)
    {
        $categories = [];
        $faker = Factory::create();

        for ($i = 1; $i < 4; $i++) {
            $categories[] = [
                'id' => $i,
                'title' => $faker->jobTitle(),
                'image' => $faker->imageUrl(),
                'description' => $faker->text(150),
            ];
        }

        if ($id) {
            $news = $this->getNews();
            return [
                'id' => $id,
                'title' => $faker->jobTitle(),
                'news' => $news
            ];
        }

        return $categories;
    }
}
