<?php

namespace App\Queries;

use App\Models\News;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Database\Eloquent\Builder;

class QueryBuilderNews implements QueryBuilder
{
    public function getBuilder(): Builder
    {
        return News::query();
    }

    public function getNews(): Collection
    {
        return News::select(['id', 'title', 'description', 'image', 'created_at'])->get();
    }

    public function getNewsById(int $id)
    {
        return News::select(['id', 'title', 'description', 'image', 'created_at'])->findOrFail($id);
    }

    public function getNewsCategoryById(int $category_id)
    {
        return News::select(['id', 'title', 'description', 'image', 'created_at'])->where('category_id', '=', $category_id)->get();
    }
}