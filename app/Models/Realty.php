<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Realty extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'bedrooms_count',
        'bathrooms_count',
        'storeys_count',
        'garages_count',
    ];


}
