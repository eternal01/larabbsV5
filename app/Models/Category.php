<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //批量插入白名单
    protected $fillable = [
        'name', 'description',
    ];
}
