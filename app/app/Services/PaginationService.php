<?php

namespace App\Services;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class PaginationService
{
    /**
     * @param Collection $items
     * @param int $perPage
     * @param int|null $page
     * @return LengthAwarePaginator
     */
    static function paginateArray(Collection $items, int $perPage = 36, int $page = null)
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);

        return new LengthAwarePaginator(
            $items->forPage($page, $perPage),
            $items->count(),
            $perPage,
            $page);
    }
}
