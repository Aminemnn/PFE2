<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homecontroller extends Controller
{
public function dashboard(){
    if(Auth::user()->role=="freelancer"){
      return view('freelancer/dashboard');
    }
    return view('/dashboard');

}
}
