<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coffee extends Model
{
    protected $fillable = [
        'image_path',
        'category_coffee_id',
        'name',
        'description',
        'price',
    ];
}
