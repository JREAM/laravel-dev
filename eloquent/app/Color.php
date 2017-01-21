<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{

    public function task()
    {
        return $this->hasOne('App\Task');
    }

}
