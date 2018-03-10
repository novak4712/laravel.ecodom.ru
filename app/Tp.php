<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tp extends Model
{
    //
    protected $table = 'tp';
    protected $fillable = ['name', 'description', 'image', 'price', 'units'];
}
