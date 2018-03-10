<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advantage extends Model
{
    //
    protected $table = 'advantage';
    protected $fillable = ['name', 'text'];
}
