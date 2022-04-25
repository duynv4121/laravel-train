<?php

namespace App\Models;
use App\Models\payments;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parents extends Model
{
    protected $table = 'parents';
    protected $fillable = [];
    protected $primarykey = 'id';
    public $timestamps = true;


    public function payments()
    {
        return $this->hasOne(App\Models\payments::class, 'id_parent', 'id');
    }
}
