<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Priority extends Model
{
    public function task()
    {
        return $this->hasOne('App\Task');
    }
}
