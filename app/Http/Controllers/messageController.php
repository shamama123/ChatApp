<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class messageController extends Controller
{
    //
    public function index(){

        $messages = Message::all();

        return view('welcome')->with('messages', $messages);
        
      //  return view('welcome', compact('messages'));

    }

    public function create(Request $request)
    {
        $message = new Message();
        $message->messagebody = $request->message;
        $message->sender = 1;
        if($message->save()){
            return redirect('/messages');
        }
    }

}
