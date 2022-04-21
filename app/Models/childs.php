<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class childs extends Model
{
    protected $table = 'childs';
    protected $fillable = [];
    protected $primarykey = 'id';
    public $timestamps = true;
}
