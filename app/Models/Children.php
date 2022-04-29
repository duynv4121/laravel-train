<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Children extends Model
{
    protected $table = 'children';
    protected $fillable = [
        'family_id',
        'family_name',
        'given_name',
        'grade',
        'gender',
        'route_service',
        'date_of_birth',
        'school_code',
        'type_of_service',
        'date_start',
        'descriptions',
        'image',
        'first_contact_id',
        'payment_contact_type',
        'payment_contact_id'
    ];
    protected $primarykey = 'id';
    public $timestamps = true;
}
