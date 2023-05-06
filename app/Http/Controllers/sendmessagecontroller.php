<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\chat;
use Illuminate\Support\Facades\Auth;

class sendmessagecontroller extends Controller
{
    public function store(Request $request){
        $message = $request->input('message');
        $user_id = $request->input('user_id');
        $convid=$request->input('convid');

        $chat = new chat();
        $chat->conversation_id=$convid;

        $chat->id_expediteur=Auth::user()->id;
        $chat->id_destinateur=$user_id;
        $chat->message=$message;
        $chat->read='false';
        $chat->save();
    }
}
