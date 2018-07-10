<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    protected $table = 'fields';
    protected $fillable = ['logo', 'email', 'phone1', 'phone2', 'address', 'description'];
}
