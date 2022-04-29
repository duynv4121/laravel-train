<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';
    protected $fillable = [
        'attention',
        'billing_address',
        'billing_email_address',
        'company_name',
    ];
    protected $primarykey = 'id';
    public $timestamps = true;

    
}
