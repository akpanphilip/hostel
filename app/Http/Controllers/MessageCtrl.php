<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class MessageCtrl extends Controller
{
    public function index($id){
        $userInfo = User::find($id);

        return view('admin.message-student', compact('userInfo'));
    }
    public function send(Request $request){
        $this->validate($request, [
            'message' => 'required|max:140',
        ]);

        Message::create([
            'messages'=> $request->message,
            'userId' => $request->userId,
        ]);

        return back()->with('status', 'Sent!');
    }
    public function messages(){
        // $messages = Message::s
        $messages = Message::query()
            ->where('userId', '=', auth()->user()->id)
            ->get();
            $messagesCount = Message::query()
            ->where('userId', '=', auth()->user()->id)
            ->count();
        return view('user.messages', compact('messages', 'messagesCount'));
    }
}
