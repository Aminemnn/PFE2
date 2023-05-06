<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class contratcontroller extends Controller
{
    public function create($id){
        $propostion=DB::table('orders')->where('id',$id)->get();
        return view('client.contrat')->with('prop',$propostion);
    }
}
