<?php

namespace App\Queries;

use App\Models\Resources;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Database\Eloquent\Builder;

class QueryBuilderResources implements QueryBuilder
{
    public function getBuilder(): Builder
    {
        return Resources::query();
    }

    public function getResources(): Collection
    {
        return Resources::select(['id', 'url'])->get();
    }

    public function getResourceById(int $id)
    {
        return Resources::select(['id', 'url'])->findOrFail($id);
    }
}