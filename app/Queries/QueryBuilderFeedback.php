<?php

namespace App\Queries;

use App\Models\Feedback;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Database\Eloquent\Builder;

class QueryBuilderFeedback implements QueryBuilder
{
    public function getBuilder(): Builder
    {
        return Feedback::query();
    }

    public function getFeedback(): Collection
    {
        return Feedback::select(['id', 'name', 'feedback', 'created_at'])->get();
    }

    public function getFeedbackById(int $id)
    {
        return Feedback::select(['id', 'name', 'feedback', 'created_at'])->findOrFail($id);
    }
}