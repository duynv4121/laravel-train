<?php

namespace App\Models;
use App\Models\payments;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    protected $table = 'parents';
    protected $fillable = [
        'family_name',
        'first_name',
        'mobile_phone',
        'office_phone',
        'email',
        'family_id',
        'type',
    ];
    protected $primarykey = 'id';
    public $timestamps = true;


    public function payments()
    {
        return $this->hasOne(App\Models\payments::class, 'id_parent', 'id');
    }
}
