<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RestAPI extends Model
{
    protected $fillable = [
        'name',
        'price',
        'description',
        'image',
    ];
}
