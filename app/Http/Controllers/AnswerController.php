<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class AnswerController extends Controller
{
    public function index()
    {
    }

    public function create()
    {

    }
    /*
     * Storing new answer
     */
    public function store(Request $request)
    {
        $answer = new Answer;
        $answer->question_id = $request->question_id;
        $answer->answer_by = $request->answer_by;
        $answer->answer = $request->answer;
        $answer->save();
        return Redirect::back();
    }
    public function show(Answer $answer)
    {
    }

    public function edit(Answer $answer)
    {
    }

    public function update(Request $request, Answer $answer)
    {

    }

    public function destroy(Answer $answer)
    {

    }
}
