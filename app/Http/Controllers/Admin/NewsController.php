<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Queries\QueryBuilderNews;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNewsRequest;
use App\Queries\QueryBuilderCategories;
use App\Http\Requests\UpdateNewsRequest;

class NewsController extends Controller
{
    public function index(QueryBuilderNews $news)
    {
        return view('admin.news.index', [
            'newsList' => $news->getNews(),
        ]);
    }


    public function create(QueryBuilderCategories $categories)
    {
        return view('admin.news.create', [
            'categories' => $categories->getCategories(),
        ]);
    }


    public function store(StoreNewsRequest $request)
    {
        $validated = $request->validated();
        $validated['slug'] = Str::slug($validated['title']);
        $category = new News($validated);

        if ($category->save()) {
            return redirect()->route('admin.news.index')
                ->with('success', 'Запись успешно добавлена');
        }

        return back()->with('error', 'Ошибка добавления');
    }


    public function show($id)
    {
        //
    }


    public function edit(QueryBuilderNews $news, QueryBuilderCategories $categories, int $id)
    {
        return view('admin.news.edit', [
            'news' => $news->getNewsById($id),
            'categories' => $categories->getCategories()
        ]);
    }


    public function update(UpdateNewsRequest $request, News $news)
    {

        $validated = $request->validated();
        $validated['slug'] = Str::slug($validated['title']);

        $news = $news->fill($validated);

        if ($news->save()) {
            return redirect()->route('admin.news.index')
                ->with('success', 'Запись успешно обновлена');
        }

        return back()->with('error', 'Ошибка обновления');
    }


    public function destroy(int $id)
    {
        News::destroy($id);

        return redirect()->route('admin.news.index')->with('success', 'запись удалена');
    }
}