<?php

namespace App\Transformers;

use App\Models\Realty;
use League\Fractal\TransformerAbstract;

class RealtyTransformer extends TransformerAbstract
{
    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected array $defaultIncludes = [
        //
    ];
    
    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected array $availableIncludes = [
        //
    ];
    
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Realty $realty)
    {
        return [
            'id' => $realty->id,
            'name' => $realty->name,
            'price' => $realty->price,
            'bedrooms' => $realty->bedrooms_count,
            'bathrooms' => $realty->bathrooms_count,
            'storeys' => $realty->storeys_count,
            'garages' => $realty->garages_count
        ];
    }
}
