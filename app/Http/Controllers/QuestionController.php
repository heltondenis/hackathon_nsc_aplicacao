<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Person;

class QuestionController extends Controller
{
    public function index(){
        return view('question.index',['questions' => Question::all()]);
    }

    public function save(Request $request){

        $person = Person::where('email', '=', $request->email)->get();

        $person = (!$person) ? $person : new Person();
        $person->name = $request->input('name');
        $person->email = $request->input('email');
        $person->lat = $request->input('lar');
        $person->lon = $request->input('lon');
        $person->save();
        
        
        $question = new Question();

        $question = new Question();
        $question->message = $request->input('message');
        $question->event = $request->input('event_id');
        $question->person_id = $person->id;
        $question->save();
      
                           
    }
}
