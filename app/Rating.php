<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    public function restaurant()
    {
        return $this->hasOne('App\Restaurant');
    }
}
