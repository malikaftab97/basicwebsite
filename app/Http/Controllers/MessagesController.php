<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
class MessagesController extends Controller
{
    public function submit(Request $request){
      $this->validate($request, [
        'name' => 'required',
        'email' => 'required'
      ]);

      // Create a Message
      $message = new Message;
       $message->name = $request->input('name');
       $message->email = $request->input('email');
       $message->message = $request->input('message');
       // save Message
       $message->save();

       //redirect
       return redirect('/home')->with('success', 'Message Sent');

    }

    public function getMessages(){
      $messages = Message::all();

      return view('messages')->with('messages',$messages);
    }

    public function editMessages(Request $request){
      $messages = Message::where('id',$request->id)->first();
      return view('update')->with('messages',$messages);
    }

    public function messagesUpdate(Request $request){
        $this->validate($request, [
          'message' => 'required'
        ]);
        $messages = Message::where('id',$request->id)->first();
         $message->message = $request->input('message');
         $message->save();

         //redirect
         return redirect('/home')->with('success', 'Message Update');
    }
}
