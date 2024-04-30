<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\messages;
class pageHelper extends Controller
{
    public function home(){
        return view('home');
    }

    public function about(){
        return view('about');
    }
    
    public function contact(){
        return view('contact');
    }

    public function list(){
        $messageData = messages::all();
        return view('list')->with('msgData',$messageData);
    }

    public function contactSubmit(Request $request){
        /*Validate contact us form with required*/
        $this->validate($request, [
            'name'=>'required',
            'email'=>'required',
            'message'=>'required'
        ]);

        $messagesObj = new messages;
        $messagesObj->name = $request->input('name');
        $messagesObj->email = $request->input('email');
        $messagesObj->messages = $request->input('message');
        $messagesObj->save();
        return redirect('home')->with('status','Message Sent Successfully.');
    }

    
}