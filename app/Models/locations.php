<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pick_up extends Model
{
    protected $table = 'locations';
    protected $fillable = [];
    protected $primarykey = 'id';
    public $timestamps = true;
}
