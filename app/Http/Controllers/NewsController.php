<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Queries\QueryBuilderNews;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index(QueryBuilderNews $news)
    {
        return view('news.index', [
            'newsList' => $news->getNews()
        ]);
    }

    public function show(QueryBuilderNews $news, int $id)
    {
        return view('news.show', [
            'news' => $news->getNewsById($id)
        ]);
    }
}