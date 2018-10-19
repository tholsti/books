<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function restaurants()
    {
        return $this->hasMany('App\Restaurant');
    }
}
