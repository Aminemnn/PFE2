<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class testercontroller extends Controller
{
    //
    public function create(){
        $categories = DB::table('categorie')->get();
        return view('tester')->with('categories',$categories);
    }
}
