<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionController extends Controller
{
    public function index(){
        return view('question.index',['questions' => Question::all()]);
    }

    public function save(Request $request){

        $question = new Question();
        $question->message = $request->input('message');
        $question->name = $request->input('name');
        $question->email = $request->input('email');
        
        $question->save();
    }
}
