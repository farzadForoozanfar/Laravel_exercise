<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
class HomeController extends Controller
{
    function  Index()
    {
        $messages = Message::all();
        return view('welcome',[
            "messages"=>$messages
        ]);
    }

    function Add(Request $request)
    {
        $this->validate($request,[
            'name'=>"required|max=256",
            'text'=>"required|max=256"
        ]);

        $message = new Message();
        $message->name = $request->name;
        $message->text = $request['text'];
        $message->save();

        return redirect()->to("/");
    }
}
