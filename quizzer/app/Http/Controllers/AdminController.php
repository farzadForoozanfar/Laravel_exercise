<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    function NewQuestion(Request $request)
    {
        $question_txt = $request->questiontext;
        $answers = $request->answers;
        $correct_id = $request->correct;
        $question_id = Session::get("question_count");
        $question_id++;
        DB::table('questions')->insert(['text'=>$question_txt]);
        $correct = 0;
        foreach ($answers as $answer)
        {
            if ($answers[$correct_id] == $answer)
                $correct = 1;
            DB::table('answers')->insert([
                'question_id'=>$question_id,
                'text'=>$answer,
                'is_true'=>$correct
            ]);
            $correct = 0;
        }
        return redirect('/');
    }
    function  Login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        if($username == "farzad" && $password == "1234")
        {
            return view("Admin");
        }
        else
            return redirect("/");
    }
}
