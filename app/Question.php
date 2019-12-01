<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['message', 'accuracy'];

    protected $hidden = ['password'];

    public function User()
    {
        return $this->hasOne('App\Person');
    }

}
