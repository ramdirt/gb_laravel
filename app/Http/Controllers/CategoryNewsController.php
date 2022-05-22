<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryNewsController extends Controller
{
    public function index()
    {
        $categories = DB::table('categories')->get();
        return view('news.categories.index', [
            'categories' => $categories
        ]);
    }

    public function show(int $id)
    {
        $titleCategory = DB::table('categories')->find($id)->title;
        $newsList = DB::table('news')->where('category_id', '=', $id)->get();
        return view('news.categories.show', [
            'titleCategory' => $titleCategory,
            'newsList' => $newsList,
        ]);
    }
}