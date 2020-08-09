<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    public function comments()
    {
        return $this->hasMany('App\comment');
    }
}