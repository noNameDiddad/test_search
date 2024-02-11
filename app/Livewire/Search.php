<?php

namespace App\Livewire;

use App\Service\RealtyService;
use Livewire\Component;
use Livewire\WithPagination;

class Search extends Component
{
    use WithPagination;
    public $searchData = [];
    public $perPage = 10;


    protected $rules = [
        'searchData.name'               => 'string',
        'searchData.bedrooms_count'     => 'integer',
        'searchData.bathrooms_count'    => 'integer',
        'searchData.storeys_count'      => 'integer',
        'searchData.garages_count'      => 'integer',
        'searchData.price_to'           => 'integer',
        'searchData.price_from'         => 'integer',
    ];

    public function updated($propertyName): void
    {
        $this->validateOnly($propertyName);

    }

    public function render(RealtyService $service)
    {
        if ($this->getErrorBag()->toArray() != []) {
            $this->searchData = [];
        }
        return view('livewire.search', [
            'realties' => $service->search($this->searchData, $this->perPage)
        ]);
    }
}
