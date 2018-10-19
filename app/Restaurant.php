<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    public function city()
    {
        return $this->hasOne('App\City');
    }

    public function country()
    {
        return $this->hasOne('App\Country');
    }

    public function location()
    {
        return $this->hasOne('App\Location');
    }

    public function rating()
    {
        return $this->hasOne('App\Rating');
    }

    public function cuisines()
    {
        return $this->belongsToMany('App\Cuisine', 'cuisine_restaurant', 'restaurant_id', 'cuisine_id');
    }
}
