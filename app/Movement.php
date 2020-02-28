<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movement extends Model
{
    public function containers()
    {
        return $this->morphedByMany('App\Container', 'movable');
    }
}
