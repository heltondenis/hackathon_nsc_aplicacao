<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class PersonController extends Controller
{
    public function show(){
        $persons = Person::all();
    }
}
