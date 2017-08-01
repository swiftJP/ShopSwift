<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ZaraProduct extends Model
{
    protected $fillable = [
        'imagePath', 'title', 'price'
    ];

    protected $hidden = [
        'remember_token'
    ];
}
