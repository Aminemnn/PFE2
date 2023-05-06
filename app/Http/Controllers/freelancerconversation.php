<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class freelancerconversation extends Controller
{
    public function create($id){
        $conv=DB::table('conversations')
            ->where('user_id1',Auth::user()->id)
            ->orWhere('user_id2',Auth::user()->id)
            ->get();
$conversation=DB::table('conversations')->where('id',$id);

        $chats=DB::table('chats')->where('conversation_id',$id)
            ->get();

        return view('freelancer.conversation')->with('con',$conv)->with('chats',$chats)->with('id',$id)
            ->with('conversation',$conversation);
    }
}
