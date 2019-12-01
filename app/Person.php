<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'person';


    protected $fillable = ['name', 'cpf'];

    public function question()
    {
        return $this->belongsToMany('App\Question')->as('question');
    }
}
