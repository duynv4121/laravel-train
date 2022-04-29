<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'locations';
    protected $fillable = [
        'type_pickup_dropoff',
        'block',
        'building',
        'postal_code',
        'street',
        'unit',
        'location',
        'coordinates',
        'child_id'
    ];
    protected $primarykey = 'id';
    public $timestamps = true;
}
