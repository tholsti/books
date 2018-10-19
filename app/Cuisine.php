<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuisine extends Model
{
    public function restaurants()
    {
        return $this->belongsToMany('App\Restaurant', 'restaurant_cuisine', 'cuisine_id', 'restaurant_id');
    }
}
