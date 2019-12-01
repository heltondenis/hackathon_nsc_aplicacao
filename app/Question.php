<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'question';

    protected $fillable = ['message', 'accuracy'];

    public function person_id()
    {
        return $this->belongOne('App\Person','foreign_key');
    }

    public function event_id()
    {
        return $this->belongOne('App\Event','foreign_key');
    }
}
