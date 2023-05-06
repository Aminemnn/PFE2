<?php

namespace App\Http\Controllers;

use App\Models\diplome;
use App\Models\experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class addexperience extends Controller
{
public function store(Request $request){
    $request->validate([
        'title'=>'required',
        'societe'=>'required',
        'location'=>'required',
        'datedeb'=>'required',
        'datefin'=>'required'
    ]);
    if ($request->input('datefin')<$request->input('datedeb')){
        return redirect()->back()->with("date_experience_error","the start date of your experience is greater than the end date");
    }
    $experience=new experience();
    $experience->title=$request->input('title');
    $experience->societe=$request->input('societe');
    $experience->location=$request->input('location');
    $experience->datedeb=$request->input('datedeb');
    $experience->datefin=$request->input('datefin');
    $experience->description=$request->input('description');
    $experience->id_user=Auth::user()->id;
    $experience->save();
    return redirect()->back()->with("experience_success","Experience added successfully !");
}
}
