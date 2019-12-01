<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'person';


    protected $fillable = ['name', 'email','lat','lon'];

    public function question()
    {
        return $this->hasMany('App\Question')->as('question');
    }
}
