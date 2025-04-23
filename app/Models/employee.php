<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class employee extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'employees';
    protected $fillable =[
        "nameUser",
        "emailUser",
        "phoneUser",
        "serviceUser"
    ];
   
}
