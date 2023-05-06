<?php

namespace App\Http\Controllers;

use App\Models\diplome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adddiplome extends Controller
{
    //
    //
    public function store(Request $request){
        $request->validate([
            'country'=>'required',
            'institut'=>'required',
            'title'=>'required',
            'years'=>'required'
        ]);
        $diplome=new diplome();
        $diplome->country=$request->input('country');
        $diplome->institut=$request->input('institut');
        $diplome->titre_diplome=$request->input('title');
        $diplome->annee=$request->input('years');
        $diplome->id_user=Auth::user()->id;
        $diplome->save();
        return redirect()->back()->with("diplome_success","Diploma added successfully !");

    }
}
