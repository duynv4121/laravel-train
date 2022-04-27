<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class families extends Model
{
    protected $table = 'families';
    protected $fillable = [];
    protected $primarykey = 'id';
    public $timestamps = true;
}
