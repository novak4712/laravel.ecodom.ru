<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gk extends Model
{
    //
    protected $table = 'gk';
    protected $fillable = ['name', 'description', 'image', 'price', 'units'];
}
