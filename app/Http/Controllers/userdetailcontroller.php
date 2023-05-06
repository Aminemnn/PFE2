<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userdetailcontroller extends Controller
{
    public function create($id){
        $user=DB::table('users')->where('id',$id)->get();
        return view('freelancer.userdetail')->with('user',$user);
    }
    public function createclient($id){
        $user=DB::table('users')->where('id',$id)->get();
        $skill=DB::table('skills')->where('user_id',$id)->get();
        $diplome=DB::table('diplomes')->where('id_user',$id)->get();
        $experience=DB::table('experiences')->where('id_user',$id)->get();
        return view('client.userdetail',['user'=>$user,])->with('skill',$skill)
            ->with('diplome',$diplome)
            ->with('experience',$experience);
    }
}
