<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todoModel extends Model
{
    protected $table = 'todo_works';
    protected $fillable = [];
    protected $primarykey = 'id';
    public $timestamps = true;
}
