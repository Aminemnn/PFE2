<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class getmessagecontroller extends Controller
{
    public function create($id){
        $chats=DB::table('chats')->where('conversation_id',$id)
            ->get();
            return $chats;
    }
}
