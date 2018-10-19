<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    // public function restaurant()
    // {
    //     return $this->hasOne('App\Restaurant');
    // }

    public function city() 
    {
        return $this->hasOne('App\City');
    }

    public function country() 
    {
        return $this->hasOne('App\Country');
    }

}
