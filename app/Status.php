<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    /**
    * Attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = ['name'];
}
