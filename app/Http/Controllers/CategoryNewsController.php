<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryNewsController extends Controller
{
    public function index()
    {
        $categories = $this->getCategories();
        return view('news.categories.index', [
            'categories' => $categories
        ]);
    }

    public function show(int $id)
    {
        $categories = $this->getCategories($id);
        return view('news.categories.show', [
            'category' => $categories
        ]);
    }
}