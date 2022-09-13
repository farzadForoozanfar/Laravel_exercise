<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;
use App\Models\Question;
use Illuminate\Support\Facades\Session;
class QuizController extends Controller
{
    function Index($id)
    {
        $question_count = Session::get("question_count");
        if($id <= $question_count)
        {
            $question = Question::find($id);
            return view('question',[
                'question'=> $question
            ]);
        }
        else
            return redirect('/');
    }
    function Check(Request $request)
    {
        $question_count = Session::get("question_count");
        $question_id = $request->question_id;
        $user_choice_answer_id = $request->answer;
        $correct_answer_id = Answer::where('question_id', '=', $question_id)->where('is_true', '=', '1')->first()->id;
        if($user_choice_answer_id == $correct_answer_id)
        {
            $score = Session::get("user_score");
            $score ++;
            Session::put("user_score",$score);
        }
        if($question_id < $question_count)
        {
            $question_id++;
            return redirect("/question/{$question_id}");
        }
        else
            return redirect("/final");

    }
}
