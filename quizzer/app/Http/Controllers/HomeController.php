<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    function Index()
    {
        $question_count = Question::all()->count();
        Session::put("question_count", $question_count);
        Session::put("user_score", 0);
        return view('index',[
           'question_count'=>$question_count
        ]);
    }
    function ReportCard()
    {
        $question_count = Question::all()->count();
        $score = Session::get("user_score");
        Session::put('user_score', 0);
        return view('ReportCard',[
            'score' => $score,
            'count' => $question_count
        ]);
    }
}
