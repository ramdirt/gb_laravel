<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Queries\QueryBuilderNews;
use Illuminate\Support\Facades\DB;
use App\Queries\QueryBuilderCategories;

class CategoryController extends Controller
{
    public function index(QueryBuilderCategories $categories)
    {
        return view('news.categories.index', [
            'categories' => $categories->getCategories(),
        ]);
    }

    public function show(QueryBuilderCategories $categories, QueryBuilderNews $news, int $id)
    {
        return view('news.categories.show', [
            'titleCategory' => $categories->getCategoryById($id)->title,
            'newsList' => $news->getNewsCategoryById($id),
        ]);
    }
}