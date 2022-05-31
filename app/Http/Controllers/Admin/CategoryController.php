<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateRequest;
use App\Queries\QueryBuilderCategories;
use App\Http\Requests\StoreCategoriesRequest;
use App\Http\Requests\UpdateCategoriesRequest;

class CategoryController extends Controller
{
    public function index(QueryBuilderCategories $categories)
    {
        return view('admin.categories.index', [
            'categories' => $categories->getCategories(),
        ]);
    }


    public function create()
    {
        return view('admin.categories.create');
    }


    public function store(StoreCategoriesRequest $request)
    {
        $validated = $request->validated();
        $category = new Category($validated);

        if ($category->save()) {
            return redirect()->route('admin.categories.index')
                ->with('success', 'Запись успешно добавлена');
        }

        return back()->with('error', 'Ошибка добавления');
    }


    public function show($id)
    {
        //
    }


    public function edit(QueryBuilderCategories $categories, int $id)
    {
        return view('admin.categories.edit', [
            'category' => $categories->getCategoryById($id)
        ]);
    }


    public function update(Category $category, UpdateCategoriesRequest $request)
    {
        $validated = $request->validated();
        $category = $category->fill($validated);

        if ($category->save()) {
            return redirect()->route('admin.categories.index')
                ->with('success', 'Запись успешно обновлена');
        }

        return back()->with('error', 'Ошибка обновления');
    }


    public function destroy(int $id)
    {
        Category::destroy($id);

        return redirect()->route('admin.categories.index')->with('success', 'запись удалена');
    }
}