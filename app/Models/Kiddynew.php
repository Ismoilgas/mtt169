<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kiddynew extends Model {

    public $timestamps = false;

    protected $fillable = [
         'title', 'text', 'image'
    ];

}
