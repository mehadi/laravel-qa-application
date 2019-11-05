<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Validator;
use View;

class QuestionController extends Controller
{


    /*
    * Getting all questions
    */
    public function index()
    {
        $questions = Question::all();
        return View::make('question.index', compact(['questions']));
    }


    public function create()
    {
        return view('question.add');
    }

    /*
    * Store new answer
    */
    public function store(Request $request)
    {
        // validate user input
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:191',
            'question' => 'required',
            'type' => 'required|max:191',
        ]);

        if($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }

        $question = new Question;
        $question->name = $request->name;
        $question->question = $request->question;
        $question->type = $request->type;
        $question->description = $request->description;
        $question->save();

        return redirect('question');
    }

    public function show(Question $question)
    {
        return View::make('question.view',compact(['question']));
    }

    public function edit(Question $question)
    {

    }


    public function update(Request $request, Question $question)
    {

    }

    public function destroy(Question $question)
    {

    }


}
