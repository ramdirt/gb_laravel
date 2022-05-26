<?php

namespace App\Queries;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Database\Eloquent\Builder;

class QueryBuilderCategories implements QueryBuilder
{
    public function getBuilder(): Builder
    {
        return Category::query();
    }

    public function getCategories(): Collection
    {
        return Category::select(['id', 'title', 'description', 'created_at'])->get();
    }

    public function getCategoryById(int $id)
    {
        return Category::select(['id', 'title', 'description', 'created_at'])->findOrFail($id);
    }
}