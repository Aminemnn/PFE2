<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class updateinfo extends Controller
{
    public function create(){
        return view('freelancer.account.info');
    }
    public function info(){
        return view('client.account.info');
    }

    public function updateinfo(Request $request){

          $name=$request->input('name');
          $phone=$request->input('phone');
          $ville=$request->input('ville');
          $country=$request->input('country');
          $code_postal=$request->input('bio');

          DB::table('users')->where('id',Auth::user()->id)->update(['name'=>$name,
              'phone'=>$phone,
              'ville'=>$ville,
              'country'=>$country,
              'codepostal'=>$code_postal]);

          return redirect()->back()->with("update_info_success","Your Info is Updated With Success");
    }
}
