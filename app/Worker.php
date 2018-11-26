<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    //

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

}
