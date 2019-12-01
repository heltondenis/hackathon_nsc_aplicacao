<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'event';


    protected $fillable = ['name'];

    public function questions()
    {
        return $this->hasMany('App\Question')->as('questions');
    }
}
