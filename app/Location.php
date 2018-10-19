<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function country()
    {
        return $this->hasOne('App\Country');
    }

    public function city()
    {
        return $this->hasOne('App\City');
    }
}
