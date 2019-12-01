<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    public function get(Request $request){
        return Event::find($request->input('id'));
    }
    
    public function save(Request $request){
        $event->name = $request->input('name');
        $event->save();

    }

    public function addQuestion(Request $request){
        $event = Event::find($request->input('event_id'));
        $event->add($request->name);
    }
}
