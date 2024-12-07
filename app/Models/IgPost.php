<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IgPost extends Model
{
    protected $fillable = [
        'image_path',
        'link',
    ];
}
