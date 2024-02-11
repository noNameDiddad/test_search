<?php

namespace App\Service;

use App\Repositories\RealtyRepository;

class RealtyService
{
    public function __construct()
    {
        $this->repository = new RealtyRepository();
    }

    public function search($data, $perPage = null)
    {
        if (isset($data['page']))
            unset($data['page']);
        return $this->repository->search($data, $perPage);
    }
}