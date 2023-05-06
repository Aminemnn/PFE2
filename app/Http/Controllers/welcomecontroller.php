<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class welcomecontroller extends Controller
{
    //
    public function create(){
        $user = DB::select('SELECT * FROM categorie WHERE nom != ?',['Other']);
        return view('welcome')->with('user',$user);
    }
}
