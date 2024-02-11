<?php

namespace App\Repositories;

use App\Models\Realty;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;

/**
 * Class RealtyRepository.
 */
class RealtyRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return Realty::class;
    }

    public function search(array $data, ?int $perPage)
    {
        $query = $this->model;
        foreach ($data as $searchKey => $searchString) {
            if (!$searchString) continue;
            $query = match ($searchKey) {
                'name' => $query->where('name', 'ilike', "%".$searchString."%"),
                'price_from' => $query->where('price', '>=', $searchString),
                'price_to' => $query->where('price', '<=', $searchString),
                default => $query->where($searchKey, $searchString),
            };
        }
        if ($perPage == null) return $query->get();
        return $query->simplePaginate($perPage);
    }
}
