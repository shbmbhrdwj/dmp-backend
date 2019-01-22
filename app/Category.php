<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasTranslations;

    public $translatable = ['name'];

    //


    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function providers()
    {
        return $this->belongsToMany(Provider::class);
    }
}
