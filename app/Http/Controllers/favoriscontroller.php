<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class favoriscontroller extends Controller
{
    public function create(){
        $favoris= DB::table('favoris_freelancers')->orderBy('id','desc')->where('id_user',Auth::user()->id)->get();
        $annonces=DB::select('SELECT * FROM annonces');
        return view('freelancer.favoris')->with('annonces',$annonces)->with('favoris',$favoris);
    }
}
