<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
  /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = ['name', 'establishment_id'];

   /**
    * Get the establishment for the place.
    */
    public function users() 
    {
        return $this->hasOne('App\Establishment');
    }
}
