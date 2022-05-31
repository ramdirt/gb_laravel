<?php

namespace App\Queries;

use App\Models\News;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\Database\Eloquent\Builder;

class QueryBuilderNews implements QueryBuilder
{
    public function getBuilder(): Builder
    {
        return News::query();
    }

    public function getNews(): LengthAwarePaginator
    {
        return News::select(['id', 'title', 'description', 'image', 'created_at', 'status', 'author'])->paginate(10);
    }

    public function getNewsById(int $id)
    {
        return News::select(['id', 'title', 'description', 'image', 'created_at', 'status', 'author'])->findOrFail($id);
    }

    public function getNewsCategoryById(int $category_id)
    {
        return News::select(['id', 'title', 'description', 'image', 'created_at'])->where('category_id', '=', $category_id)->get();
    }

    public function scopeActive($query)
    {
        return News::select('status', 'ACTIVE');
    }
}