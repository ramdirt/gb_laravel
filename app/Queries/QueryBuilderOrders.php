<?php

namespace App\Queries;

use App\Models\Order;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Database\Eloquent\Builder;

class QueryBuilderOrders implements QueryBuilder
{
    public function getBuilder(): Builder
    {
        return Order::query();
    }

    public function getOrder(): Collection
    {
        return Order::select(['id', 'name', 'email', 'phone', 'order', 'created_at'])->get();
    }

    public function getOrderById(int $id)
    {
        return Order::select(['id', 'name', 'email', 'phone', 'order', 'created_at'])->findOrFail($id);
    }
}