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

    public function phone()
    {
        return $this->hasOne(payment::class, 'parent_id');
    }
}
