<?php

namespace App\Http\Controllers\API;

use App\Answer;
use App\Http\Controllers\Controller;
use App\Question;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        $questions = Question::paginate(2);
        return response()->json($questions, 200);
    }

    public function update(Request $request)
    {
        $result = Question::whereId($request->id)->update($request->all());

        if ($result){
            $response = array(
              'status'=>'Success'
            );
        }else{
            $response = array(
                'status'=>'Failed'
            );
        }
        return response()->json($response, 200);
    }
}
