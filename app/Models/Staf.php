<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staf extends Model {

    public $timestamps = false;

    protected $fillable = [
         'name', 'position', 'image'
    ];

    

}
