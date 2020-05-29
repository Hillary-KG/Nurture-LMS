<?php


namespace App\helpers;


use Illuminate\Pagination\LengthAwarePaginator;

class customPaginator
{
    public static function paginator($perPage, $data)
    {
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        if ($currentPage == 1) {
            $start = 0;
        } else {
            $start = ($currentPage - 1) * $perPage;
        }
        $currentPageCollection = $data->slice($start, $perPage)->all();
        $paginatedResults = new LengthAwarePaginator($currentPageCollection, count($data), $perPage);
        $paginatedResults->setPath(LengthAwarePaginator::resolveCurrentPath());
        return $paginatedResults;
    }
}
